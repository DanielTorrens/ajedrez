<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\partida;

class partidaSeeder extends Seeder
{
  
    public function run()
    {
        
         $faker = \Faker\Factory::create();
		for ($i=1;$i<=100;$i++):
		     DB::table('partidas')->insert([
				 'hora_inicio'=>$faker->time($format = 'H:i:s') ,				 
				 'hora_final'=>$faker->time($format = 'H:i:s'),
				 'fecha_partida'=>$faker->dateTime,
				 'estado_partida'=>$faker->randomElement($array=["1","0","1/2"]),
				 "arbitro_id"=>$faker->numberBetween(1,20),
				 "torneo_id"=>$faker->numberBetween(1,20),
			 ]);
	    endfor;
    }
}
