<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $Nparticipants = \App\model\participants::all()->count();
        $NcomiteSoutien = \App\model\comiteSoutien::all()->count();
        $Npaiement = \App\model\paiement::all()->sum('Montant');
        $ParticipantWithNocomity = \App\model\participants::all()->where('idComite_soutien', 0)->count();
        $prevision = \App\model\paiement::all()->sum('Montant');

        return view('admin.dashboard',['Nparticipants' => $Nparticipants , 'NcomiteSoutien' => $NcomiteSoutien ,
         'Npaiement' => $Npaiement , 'listePwc' => $ParticipantWithNocomity]);
    }

    public function getParticipants()
    {
        $participants = \App\model\participants::all();
         return view('admin.participants')->with('listeP', $participants);
        // return view('admin.participants' ,  compact($participants) );
    }

    public function comiteSoutien()
    {
        $comites = \App\model\comiteSoutien::all();
         return view('admin.comites')->with('listeCS', $comites);
        // return view('admin.participants' ,  compact($participants) );
    }

}
