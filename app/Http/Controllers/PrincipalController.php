<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrincipalController extends Controller
{

    public function index()
    {
        return view("principal.login");
    }

    /*public function auth(){
        $pessoa = \App\Pessoa()::find(3);
        Auth::login($pessoa);
    }*/

}
