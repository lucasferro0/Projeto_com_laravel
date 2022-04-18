<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temporadas;

class EpisodiosController extends Controller
{
    public function exibir_episodios(int $temporada_id){

        $temporada = Temporadas::find($temporada_id);

        $episodios = $temporada->episodios;

        return view("episodios", ["episodios" => $episodios, "temporada" => $temporada]);
    }
}
