<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doadores', function (Blueprint $table) {
            $table->increments('id_doador');
            $table->string('nome');
            $table->string('cpf');
            $table->string('nascimento');
            $table->string('estado');
            $table->string('cidade');
            $table->string('endereco');
            $table->string('genero');
            $table->string('tiposanguineo');
            $table->string('emailprincipal');
            $table->string('emailalternativo');
            $table->string('numerowhatsapp');
            $table->string('outrocontato');
            $table->string('dataultimadoacao');
            $table->string('localultimadoacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doadores');
    }
}
