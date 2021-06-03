<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\partida;
use App\Models\torneo;
use App\Models\arbitro;

class partidaController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {		
		$partidas = partida::with('torneo', 'arbitro')->get();
		// $partidas = partida::with('jugador_partida')->get();

		return view('partidas.index')->with('partidas', $partidas);
    }

  
    public function create()
    {
		 $torneos=torneo::pluck("id", "nombre_torneo");
		 $arbitros=arbitro::pluck("id", "nombre_arbitro");
		
		return view('partidas.create', ["partida"=>new partida(), "torneos"=>$torneos, "arbitros"=>$arbitros]); 
    }

   
    public function store(Request $request)
    {
        
         partida::create([
            'hora_inicio' => $request['hora_inicio'],
            'hora_final' => $request['hora_final'],
			'fecha_partida' => $request['fecha_partida'],
			'estado_partida' => $request['estado_partida'],
			'torneo_id' => $request['torneo_id'], 
			'arbitro_id' => $request['arbitro_id'],
       
 ]);
        $partidas = partida::All();
        return redirect()->route('partidas.index',['partidas' => $partidas])->with('status','Partida se ha creado con éxito');
    }

  
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
		$torneos=torneo::pluck("id", "nombre_torneo");
		$arbitros=arbitro::pluck("id", "nombre_arbitro");
        $partida = partida::findOrFail($id);
        return view('partidas.edit', compact("partida"), ["torneos"=>$torneos, "arbitros"=>$arbitros]);   
    }

    
    public function update(Request $request, $id)
    {
             $request= request() ->except('_token','_method');
         partida::where('id', $id)->update([
            'hora_inicio' => $request['hora_inicio'],
            'hora_final' => $request['hora_final'],
			'fecha_partida' => $request['fecha_partida'],
			'estado_partida' => $request['estado_partida'],
			'torneo_id' => $request['torneo_id'],
			'arbitro_id' => $request['arbitro_id'],
                        
        ]);
        
        $partidas = partida::All();
        return redirect()->route('partidas.index',['partidas' => $partidas])->with('status','Partida editado con éxito');
    }

   
    public function destroy(partida $partida)
    {
          $partida->delete();

        return redirect()->route('partidas.index')->with('status','Partida eliminado con éxito');
    }
}