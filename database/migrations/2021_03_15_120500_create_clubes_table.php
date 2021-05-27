<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubesTable extends Migration
{
   
    public function up()
    {
        Schema::create('clubes', function (Blueprint $table) {
            $table->id();
			$table->string('nombre_club')->nullable();
			// $table->string('slug');
            $table->string('pais_club')->nullable();
			$table->string('email_club')->nullable();
			$table->string('telefono_club')->nullable();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('clubes');
    }
}