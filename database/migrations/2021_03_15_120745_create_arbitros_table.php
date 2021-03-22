<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArbitrosTable extends Migration
{
  
    public function up()
    {
          Schema::create('arbitros', function (Blueprint $table) {
            $table->id();
			$table->string('nombre_arbitro')->nullable();
            $table->string('apellidos_arbitro')->nullable();
			$table->string('nacionalidad_arbitro')->nullable();
            $table->string('email_arbitro')->nullable();
			$table->string('telefono_arbitro')->nullable();
            $table->timestamps();
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('arbitros');
    }
}