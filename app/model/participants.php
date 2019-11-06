<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class participants extends Model
{
    protected $fillable = ['id','Nom','prenom','E-mail','pays','ville','telephone','profession',
    'categorie','created_at','updated_at'];
}
