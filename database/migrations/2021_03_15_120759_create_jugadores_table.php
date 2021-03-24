<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadoresTable extends Migration
{
  
    public function up()
    {
          Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
			$table->string('nombre_jugador')->nullable();
            $table->string('apellidos_jugador')->nullable();
			$table->integer('ELO')->nullable();
			$table->string('titulo_jugador')->nullable();
			$table->date('fecha_titulo')->nullable();
			$table->string('nacionalidad_jugador')->nullable();
		    $table->string('email_jugador')->nullable();
			$table->string('telefono_jugador')->nullable();
			$table->foreignId('club_id')->constrained('clubes')->onDelete('cascade');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('jugadores');
    }
}

