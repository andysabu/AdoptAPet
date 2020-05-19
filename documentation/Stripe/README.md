# STRIPE

    - Stripe allows for payment integration with 0 headache for compliance.
    - The method used allows for near instant access to payments without PCI compliance
    - The method shown can be ready for use within a day at most.

## Intro

    - The integration of stripe in this project was based on the quickstart guide
        - Note: For Laravel + Angular & solely Laravel, the QS-guide was not working
    
    - For me it broke on the createToken function. 
    - The fix that worked for me was moving createToken into a seperate function and using the ES6 version of it {token, error}
    - Using ES6 notation and running the form submit function as async & await on createToken

## Front-End
    - From the start of the script,
        - Ajax is used to get currency (EUR USD) rates if the API is available
        - If not, worst lowest & highest limits are presumed based on data from 2000 onwards.

    - Card is built using Stripes iframe & servers
    - On build card gets mounted onto div#card-element
    - Validation for the card done by stripe
    - Post-Index done by stripe and changes based on the cards' country of origin
      -https://stripe.com/docs/js/element/postal_code_formatting

    - Local validations of other fields
        - Limiting the donation amount based on Stripes limit
        - Check that the name field exists since the shortest name is U
        - Check email is at least the shortest / longest possible and contains @, given RFC, it gets really messy which is why I only limit the length to the max possible. This is because there are a lot of possible, messy, emails.

    - Check if object (token) coming from Stripe is truthy
        -> All's good send it with x-csrf header to backend
            - with email and amount, email receipt + amount for charge
        -> Ajax success return results
    - Validation failure results in validation array being dumped in div#results
    - Error message cleared on form resubmit

    - When ajax is done it checks the response
       if good -> thank you message
       else call error function -> shows user a generic error message
## Back-end

    - No validations because the only way it fails is through messing with packets
        - Due to laravels principles, all data is sanitzed
    - Process is as follows
        -> Get all necessary info from the request
        -> Set Secret API key using Stripes library
        -> Create a charge using data from Front
    - If DB connection exists
        -> Store useful data in DB
            - charge_id
            - name
            - refund_url
            - user_id * IF authed
        -> DB connection fails, log the failure use mailer, continue 
    - In any case, return the receiptURL
        -> Front checks for either receipt or verbose error message, if neither returns generic message

    - If errors, error handling based on errors
      -> errors which should not be reattempted sent to mail if they should/can be fixed
      -> errors like network connection will be reattempted thanks to uuid v4 & idempotent requests
    -> Card errors are verbose for the user.
      -> No email sent for this.

# Example Stripe response for failure

```json
{
  "error": {
    "charge": "ch_1GfllFI2iO6RmPPLJeBmPUB0",
    "code": "authentication_required",
    "decline_code": "authentication_required",
    "doc_url": "https://stripe.com/docs/error-codes/authentication-required",
    "message": "Your card was declined. This transaction requires authentication.",
    "type": "card_error"
  }
}
```

# Example Stripe response for successful charge

```json
{
  "id": "ch_1GcQiKI2iO6RmPPLzcEWH71k",
  "object": "charge",
  "amount": 22200,
  "amount_refunded": 0,
  "application": null,
  "application_fee": null,
  "application_fee_amount": null,
  "balance_transaction": "txn_1GcQiKI2iO6RmPPLu4amuDbM",
  "billing_details": {
    "address": {
      "city": null,
      "country": null,
      "line1": null,
      "line2": null,
      "postal_code": "21321",
      "state": null
    },
    "email": null,
    "name": "Jane Doe",
    "phone": null
  },
  "calculated_statement_descriptor": "Stripe",
  "captured": true,
  "created": 1587969912,
  "currency": "usd",
  "customer": null,
  "description": "Test payment from idiotsandwich.com",
  "destination": null,
  "dispute": null,
  "disputed": false,
  "failure_code": null,
  "failure_message": null,
  "fraud_details": {
  },
  "invoice": null,
  "livemode": false,
  "metadata": {
  },
  "on_behalf_of": null,
  "order": null,
  "outcome": {
    "network_status": "approved_by_network",
    "reason": null,
    "risk_level": "normal",
    "risk_score": 11,
    "seller_message": "Payment complete.",
    "type": "authorized"
  },
  "paid": true,
  "payment_intent": null,
  "payment_method": "card_1GcQiJI2iO6RmPPLxRFLGLoI",
  "payment_method_details": {
    "card": {
      "brand": "visa",
      "checks": {
        "address_line1_check": null,
        "address_postal_code_check": "pass",
        "cvc_check": "pass"
      },
      "country": "US",
      "exp_month": 2,
      "exp_year": 2023,
      "fingerprint": "4lAF6vDTD19vHov9",
      "funding": "credit",
      "installments": null,
      "last4": "4242",
      "network": "visa",
      "three_d_secure": null,
      "wallet": null
    },
    "type": "card"
  },
  "receipt_email": null,
  "receipt_number": null,
  "receipt_url": "https://pay.stripe.com/receipts/acct_1Gb1LvI2iO6RmPPL/ch_1GcQiKI2iO6RmPPLzcEWH71k/rcpt_HAmGAVHEqcheandxJss31tMpsraEC3T",
  "refunded": false,
  "refunds": {
    "object": "list",
    "data": [
    ],
    "has_more": false,
    "total_count": 0,
    "url": "/v1/charges/ch_1GcQiKI2iO6RmPPLzcEWH71k/refunds"
  },
  "review": null,
  "shipping": null,
  "source": {
    "id": "card_1GcQiJI2iO6RmPPLxRFLGLoI",
    "object": "card",
    "address_city": null,
    "address_country": null,
    "address_line1": null,
    "address_line1_check": null,
    "address_line2": null,
    "address_state": null,
    "address_zip": "21321",
    "address_zip_check": "pass",
    "brand": "Visa",
    "country": "US",
    "customer": null,
    "cvc_check": "pass",
    "dynamic_last4": null,
    "exp_month": 2,
    "exp_year": 2023,
    "fingerprint": "4lAF6vDTD19vHov9",
    "funding": "credit",
    "last4": "4242",
    "metadata": {
    },
    "name": "Jane Doe",
    "tokenization_method": null
  },
  "source_transfer": null,
  "statement_descriptor": null,
  "statement_descriptor_suffix": null,
  "status": "succeeded",
  "transfer_data": null,
  "transfer_group": null
}
```