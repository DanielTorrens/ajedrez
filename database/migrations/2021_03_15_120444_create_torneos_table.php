<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTorneosTable extends Migration
{
    public function up()
    {
      Schema::create('torneos', function (Blueprint $table) {
            $table->id();
			$table->string('nombre_torneo')->nullable();
			$table->date('f_inicio')->nullable();
            $table->date('f_final')->nullable();
            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('torneos');
    }
}