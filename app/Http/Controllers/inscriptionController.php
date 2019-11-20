<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\participants;
use App\model\comiteSoutien;


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

        $doublon = participants::where('email',$request->input('email'))->first();

        if(!$doublon)
        {
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

            else
            {
                return redirect()->back()->with('danger','Desole vous ete deja inscrit');
            }
       
       
           
    }


    public function inscriptionComite(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'comite' => 'required',
           
        ]);
        
        $email = $request->input('email');
        
        $comite = $request->input('comite');
        
        $Oldparticipant = participants::where('email' , $email )->first();
        $Comite  = comiteSoutien::where('nom_comite', $comite)->first();

        $id = $Comite->idComite_soutien;

        $effectif = comiteSoutien::where('nom_comite', $comite)->first()->count();

        if($effectif != 25)
        {
            if($Oldparticipant)
            {
                $participant =  participants::where('email' , $email )->first();

                $participant->idComite_soutien = $id;

                    if($participant->save())
                    {   
                        return redirect()->back()->with('success',"Votre inscription
                        au comite de soutien a ete bien enregistré.Un mail vous a ete envoyé 
                        avec les details sur votre comite de soutien.Bien vouloir le consulter"
                        );
                    }
      
            }
            else
            {  
            return redirect()->back()->with('danger',"Vous devez vous inscire a la ceremonie avant de 
            rejoindre un comité"); 
            }
        }
        else
        {
            return redirect()->back()->with('danger',"Oups.Desole vous ne pouvez plus rejoindre ce comite l'effectif
            maximum est atteint"); 
        
        }

           
            
           
    }


    

    public function creationCS(Request $request)
    {
          $request->validate([
            'email' => 'required',
            'nameCS' => 'required',
            'lieu' => 'required',
            'heure' => 'required',
            'jour' => 'required',
            'categorie' => 'required',
            'debut' => 'required',
        ]);

        $email = $request->input('email');

        $creator =  participants::where('email' , $email )->first();

        if($creator)
        {
            $comiteSoutien = new \App\model\comiteSoutien;

            $old = comiteSoutien::where('chef_groupe', $email)->first();

            $alpha = rand(1,5000);
        
            $comiteSoutien->nom_comite = $request->input('nameCS');
            $comiteSoutien->lieu = $request->input('lieu');
            $comiteSoutien->heure = $request->input('heure');
            $comiteSoutien->jour_rencontre = $request->input('jouR');
            $comiteSoutien->categorie = $request->input('categorie');
            $comiteSoutien->Date_debut = $request->input('debut');
            $comiteSoutien->code_comite = "CS$alpha-$comiteSoutien->nom_comite";
            $comiteSoutien->chef_groupe = $request->input('email');

           

            if(!$old)
            {

                $exist = participants::where('email' , $email )->first();
                if($exist->idComite_soutien == 0)
                {
                    $comiteSoutien->save();
                    return redirect()->back()->with('success','Votre comite de soutien
                      a ete bien enregistré veuillez confirmer sa creation');
                }
                else{
                    return redirect()->back()->with('danger','Desole vous etes deja inscrit dans un comite 
                    par consequent vous ne pouvez plus en creer un');
                }
               
            }
               
            else
            {
                return redirect()->back()->with('danger',' Desolé 
                vous avez deja creer un comite de soutien');
            }
        }
            else
            {
                return redirect()->back()->with('danger',' Desolé une erreur est survenue:
                Vous devez vous inscire a la ceremonie avant de pouvoir creer un comite de soutien');
            }

          
    }


    public function id(Request $request)
    {
        $email = $request->input('email');
        $user = participants::where('email' , $email )->first();
        $comiteSoutien = comiteSoutien::where('chef_groupe' , $email )->first(); 
        $user->idComite_soutien = $comiteSoutien->idComite_soutien;

        if(  $user->save())
        {
            return redirect()->back()->with('info','Confirmation reussie.Veuillez consulter votre boite mail 
            afin de prendre connaissance des documents de gestion de votre comité');
            
        }
      
    }




    
}
