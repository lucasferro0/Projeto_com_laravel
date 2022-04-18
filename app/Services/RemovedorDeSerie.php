<?php

namespace App\Services;

use App\Models\{Series, Temporadas, Episodios};
use Illuminate\Support\Facades\DB;

class RemovedorDeSerie
{
    public function remover_serie(int $id):Series
    {
        DB::beginTransaction(); # INICIA UMA TRANSAÇÃO

        $serie = Series::find($id);

        $temporadas = $serie->temporadas;
        foreach ($temporadas as $temporada){ # DELETA OS EPISÓDIOS DE CADA TEMPORADA DA SÉRIE A SER EXCLUÍDA
            $episodios = $temporada->episodios;
            foreach ($episodios as $episodio){
                $key_episodio = $episodio->cod_episodio;
                Episodios::where("cod_episodio", $key_episodio)->delete();
            }
        }
        
        # DELETA TODAS AS TEMPORADAS DA SÉRIE A SER EXCLUÍDA
        foreach ($temporadas as $temporada){
            $key_temporada = $temporada->cod_temporada;
            Temporadas::where("cod_temporada", $key_temporada)->delete();
        }


        #$id_serie = $request->id;     É UMA OUTRA FORMA DE PEGAR O PARÂMETRO RECEBIDO NA ROTA
        $id_serie = $id;

        $registro = Series::where("cod_serie", $id_serie)->first();

        # DELETA A SÉRIE
        Series::where("cod_serie", $id_serie)->delete();

        DB::commit(); # FINALIZA A TRANSAÇÃO

        return $registro;
    }
}



?>