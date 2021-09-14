<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaMateriais extends Migration
{
    public function up()
    {
        // Cria a tabela 'materiais'
        Schema::create('materiais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
        });
    }

    public function down()
    {
        // "Dropa" a tabela 'materiais'
        Schema::drop('materiais');
    }
}
