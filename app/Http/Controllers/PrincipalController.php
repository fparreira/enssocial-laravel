<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrincipalController extends Controller
{

    public function login(){
        return view("auth.login");
    }

    public function user(){
        return view("principal.user");
    }


    /*public function auth(){
        $pessoa = \App\Pessoa()::find(3);
        Auth::login($pessoa);
    }*/

}
