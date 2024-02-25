<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecommandeRequest;
use App\Http\Requests\UpdatecommandeRequest;
use App\Models\commande;
use App\Models\panier;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function deletTpCard($id)
    {

        $active = panier::where([['id', $id], ['user_id', Auth::user()->id]])->first();
        if ($active) {
            $active->delete();
            return response()->json(['reponse' => true, 'msg' => 'Ce produit est supprimer de votre panier!!']);
        } else {
                return response()->json(['reponse' => false, 'msg' => "erreur !!"]);
        }
    }
    public function addCard($id)
    {

        $active = panier::where([['produit_id', $id], ['user_id', Auth::user()->id]])->first();
        if ($active) {
            $active->qte = $active->qte + 1;
            $active->save();
            return response()->json(['reponse' => true, 'msg' => 'Ce produit est déjà dans votre Panier, et nous avons ajouter la quantité de 1 !!']);
        } else {
            $rap = panier::create([
                'produit_id' => $id,
                'user_id' => Auth::user()->id,
                'qte' => 1,
            ]);
            if ($rap) {

                return response()->json(['reponse' => true, 'msg' => "Produit ajouter dans votre panier avec succès."]);
            } else {
                return response()->json(['reponse' => false, 'msg' => "erreur !!"]);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecommandeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecommandeRequest $request, commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(commande $commande)
    {
        //
    }
}
