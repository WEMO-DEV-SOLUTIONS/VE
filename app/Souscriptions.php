<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Souscriptions extends Model
{
    protected $table = "souscription";

    public $fillable = ['nom', 'email', 'montant'];
}
