<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class authController extends Controller
{

    

    public function Login(Request $request)
    {
        $email = $request->input('login');
        $password = $request->input('pass');

        if(Auth::attempt(['email' => $email , 'password' => $password] ))
        {

            return  redirect()->route('dashboard');
        }
        else
        {
            return  redirect()->back()->with('danger' , 'Desolé vos identifiants sont incorrect');
        }
    }

    public function logout()
    {
        Auth::logout();
        return  redirect()->route('connexion');
    }
}
