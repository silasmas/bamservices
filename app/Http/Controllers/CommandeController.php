<?php

namespace App\Http\Controllers;

use App\Models\panier;
use App\Models\produit;
use App\Models\commande;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorecommandeRequest;
use App\Http\Requests\UpdatecommandeRequest;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function addCard($id)
    {
       
        $active=panier::where([['produit_id',$id],['user_id',Auth::user()->id]])->first();
        if($active){         
            return response()->json(['reponse' => false,'msg' =>'Ce produit est déjà dans votre Panier!!']);          
        }else{
            $rap =panier::create([
                'produit_id'=>$id,
                'user_id'=>Auth::user()->id,
                'qte'=>1
            ]);
            if($rap){
                return response()->json(['reponse' => true,'msg' =>"Produit ajouter dans votre panier avec succès."]);
            }else{
                return response()->json(['reponse' => false,'msg' => "erreur !!"]);
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
