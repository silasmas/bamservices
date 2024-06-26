<?php

namespace App\Observers;

use App\Mail\messagemail;
use App\Models\message as msg;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class message
{
    /**
     * Handle the message "created" event.
     */
    public function created(msg $message): void
    {
        $user = User::where("role", "admin")->get();
        if ($user) {
            foreach ($user as $u) {
                Mail::to($u->email)->send(new messagemail($message->email,$u->name, "Alerte message reçu", "Vous avez reçu un message provenant d'un visiteur du site BAM SERVICE"));
            }
        }
        Mail::to($message->email)->send(new messagemail($message->email,$message->nom, "Confirmation du message envoyer", "Votre message à été bien envoyer à BAM SERVICE"));
    }

    /**
     * Handle the message "updated" event.
     */
    public function updated(message $message): void
    {
        //
    }

    /**
     * Handle the message "deleted" event.
     */
    public function deleted(message $message): void
    {
        //
    }

    /**
     * Handle the message "restored" event.
     */
    public function restored(message $message): void
    {
        //
    }

    /**
     * Handle the message "force deleted" event.
     */
    public function forceDeleted(message $message): void
    {
        //
    }
}
