<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inscriptionController extends Controller
{
    public function inscription(Request $request)
    {
          $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'pays' => 'required',
            'city' => 'required',
            'profession' => 'required',
            'categorie' => 'required'
        ]);

        $participant = new \App\model\participants;
        
            $participant->nom = $request->input('nom');
            $participant->prenom = $request->input('prenom');
            $participant->email = $request->input('email');
            $participant->telephone = $request->input('phone');
            $participant->pays = $request->input('pays');
            $participant->ville = $request->input('city');
            $participant->profession = $request->input('profession');
            $participant->categorie = $request->input('categorie');

            if($participant->save())
            {
                return redirect()->back()->with('success','Votre inscription
                 a la ceremonie de consecration 2019 a ete bien enregistré');
            }
            else
            {
                return redirect()->back()->withErrors($request)->withInput();
            }
           
    }


    public function inscriptionComite(Request $request)
    {

    }
    
}
