<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;

class TemporadasController extends Controller
{
    public function exibir_temporadas(int $serie_id){

        $serie = Series::find($serie_id);

        $temporadas = $serie->temporadas;

        return view("temporadas", ["serie" => $serie, "temporadas" => $temporadas]);
    }
}
