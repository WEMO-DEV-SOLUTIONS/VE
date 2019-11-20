<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
   protected $fillable = ['idAdmin','Nom','Prenoms','E-mail','Password','Niveau_securite'];
}
