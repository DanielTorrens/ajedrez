<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosTable extends Migration
{
  
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
			$table->integer('id');
			$table->primary(['id','color']);
            $table->foreignId('partida_id')->constrained('partidas')->onDelete('cascade');
			$table->string('color')->nullable();
            $table->string('movimiento')->nullable();
			$table->timestamps();
			
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
}
/*
INSERT INTO `movimientos` (`id`, `partida_id`, `color`, `movimiento`) VALUES 
(1, 1, 'B', 'e4'),
(1, 1, 'N', 'e5'),
(2, 1, 'B', 'Cf3'),
(2, 1, 'N', 'Cc6'),
(3, 1, 'B', 'Ac4'),
(3, 1, 'N', 'a6'),
(4, 1, 'B', 'Df3'),
(4, 1, 'N', 'Cf6'),
(5, 1, 'B', 'Dxf7++'),
(6, 2, 'B', 'e4'),
(6, 2, 'N', 'e5'),
(7, 2, 'B', 'Cf3'),
(7, 2, 'N', 'Cf6'),
(8, 2, 'B', 'Cxe5'),
(8, 2, 'N', 'd6'),
(9, 2, 'B', 'Cf3'),
(9, 2, 'N', 'Cxe4'),
(10, 2, 'B', 'Cc3'),
(10, 2, 'N', 'Af5'),
(11, 2, 'B', 'De2'),
(11, 2, 'N', 'De7'),
(12, 2, 'B', 'Cd5++'),
(13, 3, 'B', 'e4'),
(13, 3, 'N', 'g5'),
(14, 3, 'B', 'd4'),
(14, 3, 'N', 'f6'),
(15, 3, 'B', 'DH5'),
(16, 4, 'B', 'e4'),
(16, 4, 'N', 'Cf6'),
(17, 4, 'B', 'Cd2'),
(17, 4, 'N', 'e5'),
(18, 4, 'B', 'dxe5'),
(18, 4, 'N', 'Cg4'),
(19, 4, 'B', 'h3'),
(19, 4, 'N', 'Ce3++'),
(20, 5, 'B', 'e4'),
(20, 5, 'N', 'e5'),
(21, 5, 'B', 'Dh5'),
(21, 5, 'N', 'Re7'),
(22, 5, 'B', 'Dxe5++');
*/
