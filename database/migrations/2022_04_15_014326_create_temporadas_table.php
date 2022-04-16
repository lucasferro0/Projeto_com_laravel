<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporadas', function (Blueprint $table) {
            $table->bigIncrements("cod_temporada");
            $table->integer("numero_temporada");
            $table->integer("series_cod_serie"); # O NOME DA CHAVE ESTRANGEIRA DEVE SER: nome da tabela a que faz referência + chave primária da tabela a que faz referência
            $table->foreign("series_cod_serie")->references("cod_serie")->on("series"); # O NOME DA CHAVE ESTRANGEIRA DEVE SER: nome da tabela a que faz referência + chave primária da tabela a que faz referência
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporadas');
    }
};
