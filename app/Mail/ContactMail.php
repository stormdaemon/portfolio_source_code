<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $validatedData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($validatedData)
    {
        $this->validatedData = $validatedData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->validatedData['email'])
                    ->text('Bonjour,' . "\r\n" .
                           'Vous avez reçu un message de ' . $this->validatedData['name'] . ' ' . $this->validatedData['firstname'] . "\r\n" .
                           'Voici le message : ' . "\r\n" . $this->validatedData['message'])
                    ->subject('Nouveau message depuis le formulaire de contact');
    }
}
