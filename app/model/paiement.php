<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    protected $fillable = ['id','Nom','email','numero','code_paiement','prenom','Date_paiement','montant','created_at','updated_at'];

}
