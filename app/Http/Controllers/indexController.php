<?php

namespace App\Http\Controllers;

use App\model\comiteSoutien;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class indexController extends Controller
{
    /**
     * @param Request $request
     * @return Factory|View
     */
    public function index(Request $request)
    {
        $comites  = comiteSoutien::all();

        return view('form.inscriptionCS', compact('comites'));
    }

    
}
