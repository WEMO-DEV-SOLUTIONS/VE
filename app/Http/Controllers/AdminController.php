<?php

namespace App\Http\Controllers;

use App\model\comiteSoutien;
use App\model\paiement;
use App\model\participants;
use App\Souscriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $Nparticipants = participants::all()->count();
        $NcomiteSoutien = comiteSoutien::all()->count();
        $ParticipantWithNocomity = participants::all()->where('idComite_soutien', 0)->count();
        $paiements = paiement::sum('montant');
        $souscription = Souscriptions::sum('montant');


        return view('admin.dashboard',['Nparticipants' => $Nparticipants , 'NcomiteSoutien' => $NcomiteSoutien ,
         'listePwc' => $ParticipantWithNocomity, 'montant' => $paiements, 'Previsions' => $souscription]);
    }

    public function getParticipants()
    {
        $participants = participants::all();
         return view('admin.participants')->with('listeP', $participants);
        // return view('admin.participants' ,  compact($participants) );
    }

    public function comiteSoutien()
    {
        $comites = comiteSoutien::all();
        $montants = paiement::groupBy('nom_comite')
            ->selectRaw('nom_comite, sum(montant) as sum')
            ->get();
         return view('admin.comites', compact('montants'))->with('listeCS', $comites);
        // return view('admin.participants' ,  compact($participants) );
    }

}
