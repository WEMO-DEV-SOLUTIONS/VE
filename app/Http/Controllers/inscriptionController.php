<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Souscription;
use App\model\paiement;
use App\Mail\ComiteMail;
use App\Mail\ValideMail;
use App\model\participants;
use App\model\comiteSoutien;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Mail\InscriptionMail;
use App\Mail\ConfirmationPaiemnet;
use App\Souscriptions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Particpants;

class inscriptionController extends Controller
{
    public function inscription(Request $request)
    {
         $data =  $request->validate([
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
                        Mail::to($request->input('email'))->send(new InscriptionMail($data));
                        return redirect()->back()->with('success','Votre inscription
                        a la ceremonie de consecration 2019 a ete bien enregistré.
                        vous recevrez un mail de confirmaton.');
                    }
                        else
                        {
                            return redirect()->back()->withErrors($request)->withInput();
                        }


        }

            else
            {
                return redirect()->back()->with('danger','Un utilisateur possède déjà cette email veuillez le changer');
            }



    }


    public function inscriptionComite(Request $request)
    {
       $data = $request->validate([
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
                       // Mail::to( $email = $request->input('email'))->send(new ComiteMail($data));
                        return redirect()->route('soutien')->with('success',"Pour terminer votre inscription veuillez effectuer une souscription"
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
       $data =    $request->validate([
            'email' => 'required',
            'nameCS' => 'required',
            'lieu' => 'required',
            'heure' => 'required',
            'rencontre' => 'required',
            'categorie' => 'required',
            'debut' => 'required',
            'password' => 'required',
        ]);

        $email = $request->input('email');

        $creator =  participants::where('email' , $email )->first();

        if($creator)
        {
            $comiteSoutien = new \App\model\comiteSoutien;

            $old = comiteSoutien::where('chef_groupe', $email)->first();

            $alpha = rand(1,5000);

            $comiteSoutien->nom_comite = $request->input('nameCS');
            $comiteSoutien->ville = $request->input('ville');
            $comiteSoutien->lieu = $request->input('lieu');
            $comiteSoutien->heure = $request->input('heure');
            $comiteSoutien->rencontre = $request->input('rencontre');
            $comiteSoutien->categorie = $request->input('categorie');
            $comiteSoutien->Date_debut = $request->input('debut');
            $comiteSoutien->code_comite = "CS $alpha-{$comiteSoutien->nom_comite} ";
            $comiteSoutien->chef_groupe = $request->input('email');
            $comiteSoutien->password = Hash::make($request->input('password'));

     if(!$old)
            {

                $exist = participants::where('email' , $email )->first();
                if($exist->idComite_soutien == 0)
                {
                    $comiteSoutien->save();
                    Mail::to($comiteSoutien->chef_groupe = $request->input('email'))->send(new ValideMail($data));
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

    public function verifyPayment(Request $request)
    {


        $code_paiement = $request->input('code_paiement');
        $nom = $request->input('name');

        $ValidPay =  paiement::all()
            ->where('code_paiement' ,'=', $code_paiement )
            ->first();
        $Valid =  paiement::all()
            ->where('nom' ,'=', $nom )
            ->first();

        if (empty($code_paiement) && empty($nom)){
            return back()->with('danger', 'Entre votre code ou votre nom');
        }

        if($ValidPay)
        {

            return redirect()->route('soutienFinancier')->with('valid', $ValidPay);
        }
        elseif (empty($code_paiement)) {
            if ($Valid) {
                return redirect()->route('soutienFinancier')->with('valid', $Valid);
            } else {
                return redirect()->back()->with('danger', 'Paiment non enregistre');
            }
        }
    }

    public function makePayment(Request $request)
    {
        $data = $request->validate([
           'date' => 'required',
           'montant' => 'required',
           'prenom' => 'required',
            'nom' => 'required',
            't_virement' => 'required'
        ]);
        $type = $request->input('t_virement');
        $date = $request->input('date');
        $montant = $request->input('montant');
        $name = $request->input('nom');
        $surname = $request->input('prenom');
        $email = $request->input('email');
        $numero = $request->input('numero');

        $code_paiement = rand(1,5000);
        $ValidPay = new paiement ;


            $ValidPay->Date_paiement = $date;
            $ValidPay->code_comite = session('comite_user.code_comite');;
            $ValidPay->nom_comite = session('comite_user.nom_comite');
            $ValidPay->montant  = $montant;
            $ValidPay->nom = $name;
            $ValidPay->t_versement = $type;
            $ValidPay->prenom = $surname;
            $ValidPay->email = $email;
            $ValidPay->numero = $numero;
            $ValidPay->code_paiement = $code_paiement;

     $comite =  session('comite_user.idComite_soutien');
            $participant = participants::all()->where('idComite_soutien' ,'=', $comite)
                ->where('nom' , '=' , $name)
                ->where('prenom' , '=' , $surname)
                ->first();

            if($participant)
            {

                $ValidPay->save();

                if($ValidPay && $email)
                {
                    Mail::to($email = $request->input('email'))->send(new ConfirmationPaiemnet($code_paiement));
                    return redirect()->back()->with('success','Paiment enregistre');
                }
                else{
                    return redirect()->back()->with('danger','Paiment non enregistre')->withErrors($request)->withInput();
                }
            }
            else {
                return redirect()->back()->with('danger','ce participant n\'est pas dans votre comite de soutien');
            }
    }

   public function Souscription(Request $request){

       $request->validate([
           'nom' => 'required',
           'email' => 'required',
        'montant' => 'required',
      ]);

      $montant = $request->input('montant');
      $nom = $request->input('nom');
      $email = $request->input('email');
      $participant = participants::all()
      ->where('email' , '=' , $email)
      ->where('nom', '=', $nom)
      ->first();


      $Souscription = new Souscriptions();
      $Souscription->montant = $montant;
      $Souscription->nom = $nom;
      $Souscription->email = $email;

            if($participant){
                $Souscription->save();
                return redirect()->back()->with('success', 'Souscription Effectuer avec Susccess');
            }else{
                return redirect()->back()->with("danger", "Vous n'estes pas Participants Veuillez vous Inscrire");
            }
   }


   public function send(Request $request) {
       $data = $request->validate([
            'name' => 'required',
           'message' => 'required',
           'subject' => 'required',
           'email' => 'required'
        ]);

       Mail::to('nationspourlEternel@gmail.com')->send(new ContactMail($data));
       return redirect()->back()->with('success', 'Votre mail a été envoyer avec success');
   }

   public function create(Request $request) {
       $data =    $request->validate([
           'email' => 'required',
           'nameCS' => 'required',
           'lieu' => 'required',
           'heure' => 'required',
           'rencontre' => 'required',
           'categorie' => 'required',
           'debut' => 'required',
           'password' => 'required',
       ]);

       $email = $request->input('email');

       $creator =  participants::where('email' , $email )->first();

       if($creator)
       {
           $comiteSoutien = new comiteSoutien();

           $old = comiteSoutien::where('chef_groupe', $email)->first();

           $alpha = rand(1,5000);

           $comiteSoutien->nom_comite = $request->input('nameCS');
           $comiteSoutien->ville = $request->input('ville');
           $comiteSoutien->lieu = $request->input('lieu');
           $comiteSoutien->heure = $request->input('heure');
           $comiteSoutien->rencontre = $request->input('rencontre');
           $comiteSoutien->categorie = $request->input('categorie');
           $comiteSoutien->Date_debut = $request->input('debut');
           $comiteSoutien->code_comite = "CS $alpha-{$comiteSoutien->nom_comite} ";
           $comiteSoutien->chef_groupe = $request->input('email');
           $comiteSoutien->password = Hash::make($request->input('password'));

           if(!$old)
           {
               $exist = participants::where('email' , $email )->first();
               if($exist->idComite_soutien == 0)
               {
                   $comiteSoutien->save();
                   Mail::to($comiteSoutien->chef_groupe = $request->input('email'))->send(new ValideMail($data));
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



}
