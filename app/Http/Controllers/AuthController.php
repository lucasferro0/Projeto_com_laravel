<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{

    public function exibir_login()
    {
        return view('autenticacao.login');
    }

    public function exibir_cadastro()
    {
        return view('autenticacao.cadastro');
    }
}