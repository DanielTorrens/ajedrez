<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidasTable extends Migration
{
    
    public function up()
    {
          Schema::create('partidas', function (Blueprint $table) {
            $table->id();
		    $table->foreignId('arbitro_id')->constrained('arbitros')->onDelete('cascade');
			$table->foreignId('torneo_id')->constrained('torneos')->onDelete('cascade');
			$table->time('hora_inicio')->nullable();
            $table->time('hora_final')->nullable();
			$table->date('fecha_partida')->nullable();
			$table->string('estado_partida')->nullable();
            $table->timestamps();
        });

	}
    public function down()
    {
        Schema::dropIfExists('partidas');
    }
}
