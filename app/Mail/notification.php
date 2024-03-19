<?php

namespace App\Mail;

use App\Models\commande;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class notification extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user,commande $commande)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.notify')->subject("Nouveau commande sur le site");
    }
}
