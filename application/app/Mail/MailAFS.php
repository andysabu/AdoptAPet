<?php

namespace App\Mail;

use App\model\Animal;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailAFS extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $animal;
    public $action;

    /**
     * Create a new message instance.
     *
     * @param User user
     * @param Animal animal
     * @param String action
     * @return void
     */
    public function __construct(User $user, Animal $animal, String $action)
    {
        $this->user = $user;
        $this->animal = $animal;
        $this->action = $action;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('adoptapetsite@protonmail.com')
                ->view('emails.afs-mail');
    }
}
