<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class comiteSoutien extends Model
{
    protected $fillable = ['idComite_soutien','nom_comite','categorie','lieu','heure','jour rencontre',
    'date_debut','created_at','code_comité','chef_groupe','updated_at'];
}
