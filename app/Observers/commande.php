<?php

namespace App\Observers;

use App\Models\User;
use App\Mail\notification;
use App\Models\commande as cmd;
use Illuminate\Support\Facades\Mail;

class commande
{
    /**
     * Handle the commande "created" event.
     */
    public function created(cmd $commande): void
    {
        $user = User::where("role","admin")->get();
        if ($user) {
            foreach ($user as $u) {
                Mail::to($u->email)->send(new notification($u,$commande));
            }
        }
    }

    /**
     * Handle the commande "updated" event.
     */
    public function updated(commande $commande): void
    {
        //
    }

    /**
     * Handle the commande "deleted" event.
     */
    public function deleted(commande $commande): void
    {
        //
    }

    /**
     * Handle the commande "restored" event.
     */
    public function restored(commande $commande): void
    {
        //
    }

    /**
     * Handle the commande "force deleted" event.
     */
    public function forceDeleted(commande $commande): void
    {
        //
    }
}
