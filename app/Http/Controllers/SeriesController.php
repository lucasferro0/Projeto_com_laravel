<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function exibir_series(Request $request)
    {
        $series = Series::query()->orderBy("nome_serie")->get();

        $mensagem = $request->session()->get("mensagem");

        return view('series', ["series" => $series, "mensagem" => $mensagem]);
    }

    public function exibir_adicionar_serie()
    {
        return view('adicionar_serie');
    }

    public function add_serie(Request $request)
    {
        $serie = Series::create([
            
            "nome_serie" => $request->get("nome")
            
        ]);

        $request->session()->flash("mensagem", "A série $serie->cod_serie, cujo nome é $serie->nome_serie, foi adicionada com sucesso!");
        
        return redirect("/series");
    }

    public function del_serie(Request $request)
    {
        $id_serie = $request->id;

        $registro = Series::where("cod_serie", $id_serie)->first();

        
        Series::where("cod_serie", $id_serie)->delete();

        $request->session()->flash("mensagem", "A série $registro->nome_serie foi deletada com sucesso!");

        
        return redirect("/series");
    }
}