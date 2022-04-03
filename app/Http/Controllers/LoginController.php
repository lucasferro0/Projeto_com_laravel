<?php

namespace App\Http\Controllers;


class LoginController extends Controller
{

    public function exibir_login()
    {
        return view('autenticacao.login');
    }
}