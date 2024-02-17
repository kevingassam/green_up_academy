<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendocument extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $user, $televerssement;
    public function __construct($user, $televerssement)
    {
        $this->user = $user;
        $this->televerssement = $televerssement;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->from("no-reply@kevin-gassam.com") // L'expéditeur
            ->subject("MY-GUA | NOUVEAU DOCUMENT | ". $this->televerssement->titre) // Le sujet
            ->view('Mails.Document'); // La vue
    }
}
