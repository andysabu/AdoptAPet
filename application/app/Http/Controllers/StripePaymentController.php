<?php

namespace App\Http\Controllers;

use App\model\Payment;
use Stripe;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Uuid;

class StripePaymentController extends Controller
{
    // 
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        return view('donate');
    }

    protected function charge(Request $request)
    {
        // ? UUID for request retry
        $uuid = Uuid::uuid4();
        // ? TL;DR: Set charge, execute, store data, return
        try {
            // ? Set maximum retries if stripes headers are "should-retry"
            // ? Automatically done 
            \Stripe\Stripe::setMaxNetworkRetries(2);
            // ? Get token id for charge
            $card_token = data_get($request, 'token.id');
            // ? Get donation amount
            $amount = $request->amount;
            // ? Get email for reciept, automatically sent in livemode
            $email = $request->email;
            // ? Set API Secret
            $sk = config('sk');
            Stripe\Stripe::setApiKey($sk); // -> config sets this
            // Charge the card
            $charge = Stripe\Charge::create(
                [
                    "amount" => $amount * 100,
                    "currency" => "eur",
                    "source" => $card_token,
                    "description" => "Thank you for donating to AdoptAPet!",
                    "receipt_email" => $email,
                ],
                [
                    "idempotency_key" => $uuid,
                ]
            );
            // ? In case of exceptions log and mail. 
            try {
                // data_gets from object
                $status = data_get($charge, 'status');
                $charge_id = data_get($charge, 'id');
                $name = data_get($charge, 'billing_details.name');
                $refundURL = data_get($charge, 'refunds.url');
                // Test auth
                $user_id = 0;
                if (Auth::check())
                    $user_id = Auth::user()->id;
                // Change status value if success                 
                if ($status === 'succeeded')
                    $status = true;
                // If authed store U_ID
                if ($status && $user_id > 0)
                    $this->store($charge_id, $name, $refundURL, $user_id);
                // If not authed, leave as null
                if ($status && $user_id === 0)
                    $this->store($charge_id, $name, $refundURL);
            } catch (Exception $e) {
                logger('Unpredicted exception -> ' . $e);
                $storageException = true;
            }
            // ? Send back R URL
            // If strpos is true, means TX success
            $receiptURL = data_get($charge, 'receipt_url');
            if (strpos($receiptURL, 'pay.stripe.com/receipts') !== false) {
                if ($storageException)
                    $this->mailer('DB Exception -> AAPet', 'Unpredicted Exception occured in try block for DB storage, check logs');
                return $receiptURL; // Return receipt to show
            }
        } catch (\Stripe\Exception\CardException $e) {
            // ? Verbose error visualization for the user.
            // ? Our docs contain an example of an error response
            // ? To test use card: 4000002760003184, any future cvc and any numbers
            // $this->mailer('TEST CardException', 'REEEEEEEEEEEEEEEEEEEEE');
            return 'Sorry. ' . $e->getError()->message;
        } catch (\Stripe\Exception\RateLimitException $e) {
            // Too many requests made to the API too quickly
            \logger('Too many requests, RateLimitException, wtf is going on? -> ' . $e);
            $this->mailer('AAPET -> RateLimitException', 'Yo, some weird shit is going on and too many API requests are happening.');
        } catch (\Stripe\Exception\InvalidRequestException $e) {
            // Invalid parameters were supplied to Stripe's API
            \logger('Invalid request params, someones been playing with the post request.');
        } catch (\Stripe\Exception\AuthenticationException $e) {
            // Authentication with Stripe's API failed
            // (maybe you changed API keys recently)
            \logger('Check those API keys, make sure they\'re correct, ALL of them.');
            $this->mailer('AAPET -> AuthenticationException', 'Authentication with Stripe\'s API failed, maybe you changed API keys recently.');
        } catch (\Stripe\Exception\ApiConnectionException $e) {
            // Network communication with Stripe failed
            \logger('Network communication with stripe failed -> ' . $e);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Generic error handled by jQuery
            \logger('ApiErrorException -> ' . $e);
            $this->mailer('AAPet -> ApiErrorException', $e);
        } catch (Exception $e) {
            \logger('This one is certainly your fault, time to start going through the code & replicating the error');
            \logger('The best exception ever: ' . $e);
            $this->mailer('AAPet -> UCategorized E.', $e);
        }
    }
    // No point for it to be prot/pub because no other uses/ will ever use this method
    private function store($c_id, $name, $refund, $u_id = null)
    {
        $p = new Payment;
        $p->charge_id = $c_id;
        $p->name = $name;
        $p->refund_url = $refund;
        // User id null means the donation was done 'anonymously'
        if ($u_id !== null) $p->user_id = $u_id;
        return $p->save();
    }
    // No other part is planning on using raw mailer
    // In case its needed elsewhere, due to time constraints it would be placed in a controller and injected
    // If we have the time, it should be made a Service
    private function mailer($s, $b)
    {
        // Works correctly, to test: You can force a CardException using the card mentioned next to it
        // Add A call from the CardException to this method 
        // ? $message as $m $subject as $s $body as $b
        Mail::send([], ['s' => $s, 'b' => $b], function ($m) use ($s, $b) {
            $m->sender('adopterrlog@gmail.com', 'Friendly E. Messenger');
            $m->to('adoptapetsite@protonmail.com', 'AAPet Team');
            $m->cc('imazurin@hotmail.com', 'Idiot.Sandwich');
            $m->subject($s);
            $m->setBody($b);
        });
    }
}
