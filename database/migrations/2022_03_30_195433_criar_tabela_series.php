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
        Schema::create("series", function(Blueprint $table){

            $table->bigIncrements("cod_serie"); # CHAVE PRIMÁRIA QUE SE AUTO INCREMENTA
            $table->string("nome_serie");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("series");
    }
};
