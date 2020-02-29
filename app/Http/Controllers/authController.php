<?php

namespace App\Http\Controllers;

use App\model\comiteSoutien;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class authController extends Controller
{



    public function Login(Request $request)
    {
        $email = $request->input('login');
        $password = $request->input('pass');

        if(Auth::attempt(['email' => $email , 'password' => $password] ))
        {
            return  redirect()->route('dashboard');
        }else {

            $comiteSoutien = comiteSoutien::where('chef_groupe' , '=', $email)->first();

            if (  !empty($comiteSoutien) AND Hash::check($password,$comiteSoutien->password) ){

                session()->put('comite_user',$comiteSoutien);
                return  redirect()->route('liste')->with('success','Connexion reussie');
                
            } else {
                return  redirect()->back()->with('danger' , 'Desolé vos identifiants sont incorrect');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->remove('comite_user');
        return  redirect()->route('connexion');
    }
}
