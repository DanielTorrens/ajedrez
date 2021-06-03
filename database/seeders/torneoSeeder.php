<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\torneo;
use Carbon\Carbon;

class torneoSeeder extends Seeder
{		
	 static $tournaments = [
      'Tata Steel Chess Tournament','Torneo de Candidatos', 'Gibraltar International Chess Festival','Olimpiadas de Ajedrez','Campeonato del Mundo de Blitz','Torneo Internacional de Ajedrez Ciudad de Linares'];
   
    public function run()
    {
		$faker = \Faker\Factory::create();		
        
		for ($i=1;$i<=6;$i++):
		$fecha = $faker->date($format = 'd-m-Y', $max = 'now');
		$fechaCualquieraInicio = Carbon::create($fecha);
        $fechaCualquieraFinal = Carbon::create($fecha)->addDay(rand(1, 30), "day");
		     DB::table('torneos')->insert([
				 'nombre_torneo'=>$faker->unique()->randomElement(self::$tournaments),
				 'f_inicio'=>$fechaCualquieraInicio,				 
				 'f_final'=> $fechaCualquieraFinal,
			 ]);
	    endfor;
    }
}