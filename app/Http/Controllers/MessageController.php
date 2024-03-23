<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatemessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $por = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:3',
        ]);
       $reponse= message::create([
            'nom' =>$request->name,
            'email' =>$request->email,
            'message' =>$request->message,
        ]);
        if($reponse){
            return response()->json([
                'reponse' => true,
                'msg' => 'Message envoyer avec succès',
            ]);
        }else{
            return response()->json([
                'reponse' => false,
                'msg' => 'Echec d\'envoi',
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemessageRequest $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(message $message)
    {
        //
    }
}
