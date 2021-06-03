<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\partida;
use Carbon\Carbon;

class partidaSeeder extends Seeder
{
  
    public function run()
    {
        
        $faker = \Faker\Factory::create();
		for ($i=1;$i<=5;$i++):
		$hora = $faker->time($format = 'H:i:s', $min ='10:00:00', $max ='11:00:00');
		$horaCualquieraInicio = Carbon::create($hora);
        $horaCualquieraFinal = Carbon::create($hora)->addMinute(rand(10, 20), "minute");
		     DB::table('partidas')->insert([
				 'hora_inicio'=>$horaCualquieraInicio,				 
				 'hora_final'=> $horaCualquieraFinal,
				 'fecha_partida'=>$faker->dateTime,
				 'estado_partida'=>$faker->randomElement($array=["1","0","1/2"]),
				 "arbitro_id"=>$faker->numberBetween(1,6),
				 "torneo_id"=>$faker->numberBetween(1,6),
			 ]);
	    endfor;
    }
}
