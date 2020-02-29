<?php

namespace App\Http\Controllers;

use App\model\comiteSoutien;
use App\model\paiement;
use App\model\participants;
use App\Souscriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

class showParticipantsController extends Controller
{
    public function show(){
        $comite = participants::all()->where('idComite_soutien', '=' , session('comite_user.idComite_soutien'));
        $paiement = paiement::all()->where('nom_comite', '=', session('comite_user.nom_comite'));
        $souscription = paiement::sum('montant');
        $total = DB::table('paiements')->select('montant')->where('nom_comite', '=', session('comite_user.nom_comite'))
            ->sum('montant');
        return view('gestion_participants.listerParticipant', [
            'comite' => $comite,
            'paiement' => $paiement,
            'souscription'=> $souscription,
            'total' => $total
        ]);
    }

    public function addparticipant(Request $request)
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

    public function removeparticipant(participants $participants ){

        $remove = DB::table(Particpants::class)->update($participants)->set('idComite_soutien', '=', 0)
            ->where('id', '=', $participants->id);

        return redirect()->route('liste')->with('success', 'supprimer avec success');

    }
}
