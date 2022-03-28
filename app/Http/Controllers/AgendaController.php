<?php

namespace App\Http\Controllers;

class AgendaController extends Controller
{

    public function exibir_tarefas()
    {
        $lista = ["caminhada", "corrida", "estudar"];

        return view('agenda', ["lista"=>$lista]);
    }

    public function exibir_adicionar_tarefas()
    {
        return view('adicionar_tarefa');
    }
}