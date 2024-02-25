<?php

namespace App\Observers;

use App\Mail\messagemail;
use App\Models\message as msg;

class message
{
    /**
     * Handle the message "created" event.
     */
    public function created(msg $message): void
    {
        Mail::to($message->email)->send(new messagemail($message->email, "Crétaion des accès chez groupe synapse"));
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
