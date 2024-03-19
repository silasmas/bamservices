<?php

namespace App\Providers;

use App\Models\commande;
use App\Observers\commande as ObserversCommande;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        commande::observe(ObserversCommande::class);
    }
}
