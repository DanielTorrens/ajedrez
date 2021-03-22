<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadorPartidaTable extends Migration
{
  
    public function up()
    {
        Schema::create('jugador_partida', function (Blueprint $table) {
			$table->id();
			$table->foreignId('jugador_id')->constrained('jugadores')->onDelete('cascade');
			$table->foreignId('partida _id')->constrained('partidas')->onDelete('cascade');
			//$table->integer('jugador_id')->unsigned();
    		//$table->integer('partida_id')->unsigned();
			//$table->primary(['jugador_id','partida_id']);
    		//$table->foreign('jugador_id')->references('id')->on('jugadores')->onDelete('cascade');
    		//$table->foreign('partida_id')->references('id')->on('partidas')->onDelete('cascade');
			$table->string('color')->nullable();
			$table->string('resultado')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jugador_partida');
    }
}
