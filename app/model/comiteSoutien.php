<?php

namespace App\model;

use App\Http\Middleware\Authenticate;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class comiteSoutien extends Authenticatable
{
    use Notifiable;

    protected $guarded;


}
