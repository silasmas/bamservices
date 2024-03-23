<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class messagemail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $objet = "";
    public $nom = "";
    public $message = "";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$nom, $objet, $msg)
    {
        $this->email = $email;
        $this->objet = $objet;
        $this->nom = $nom;
        $this->message = $msg;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->objet,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
