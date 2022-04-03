<?php

namespace App\Http\Controllers;


class CadastroController extends Controller
{
    public function exibir_cadastro()
    {
        return view('autenticacao.cadastro');
    }
}
