<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(Request $request)
    {
        $comites = \App\model\comiteSoutien::all();

        return view('form.inscriptionCS')->with('comites',$comites);
    }
}
