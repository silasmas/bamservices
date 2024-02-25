<?php

namespace App\Observers;

use App\Models\commande as cmd;

class commande
{
    /**
     * Handle the commande "created" event.
     */
    public function created(cmd $commande): void
    {
        //
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
