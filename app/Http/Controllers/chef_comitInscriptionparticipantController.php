<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\participants;
use App\model\comiteSoutien;
use Illuminate\Support\Facades\Hash;

class chef_comitInscriptionparticipantController extends Controller
{
    public function affichage (){

        return view('gestion_participants.inscriptionParticipants');
    }

    public function afficheforminscription (){

        return view('gestion_participants.inscriptionCC');
    }

  

   
}

