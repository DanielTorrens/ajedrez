<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\torneo;

class torneoSeeder extends Seeder
{
	
	 static $tournaments = [
      'Tata Steel Chess Tournament','Torneo de Candidatos', 'Gibraltar International Chess Festival','Olimpiadas de Ajedrez','Campeonato del Mundo de Blitz','Torneo Internacional de Ajedrez Ciudad de Linares'];
	
	//static $random = Carbon::today()->addDays(rand(1, 30));
   
    public function run()
    {

         $faker = \Faker\Factory::create();
		for ($i=1;$i<=20;$i++):
		     DB::table('torneos')->insert([
				 'nombre_torneo'=>$faker->randomElement(self::$tournaments),
				 'f_inicio'=>$faker->date,				 
				 'f_final'=>$faker->date,
			 ]);
	    endfor;
    }
}
