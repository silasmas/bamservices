<?php

namespace App\Providers;

use App\Models\panier;
use App\Models\produit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $categorie = produit::select('categorie')->distinct()->get();
            $prod=produit::get();
            $view->with('prod', $prod);
            $view->with('categorie', $categorie);
            if (!Auth::guest()) {
                $panier = panier::with("produit", "user")->where("user_id", Auth::user()->id)->get();
                // dd($panier->pluck("prix"));
                $view->with('panier', $panier);
            }
        });
    }
}
