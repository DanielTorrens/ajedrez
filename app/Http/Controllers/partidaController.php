<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\partida;

class partidaController extends Controller
{
    
    public function index()
    {
          $partidas=partida::all();
		
		return view("partidas.index",compact("partidas"));
    }

  
    public function create()
    {
        return view('partidas.create'); 
    }

   
    public function store(Request $request)
    {
        
         partida::create([
            'hora_inicio' => $request['hora_inicio'],
            'hora_final' => $request['hora_final'],
			'fecha_partida' => $request['fecha_partida'],
			'estado_partida' => $request['estado_partida'],
       
 ]);
        $partidas = partida::All();
        return redirect()->route('partidas.index',['partidas' => $partidas])->with('status','Partida se ha creado con éxito');
    }

  
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $partida = partida::findOrFail($id);
        return view('partidas.edit', compact("partida"));   
    }

    
    public function update(Request $request, $id)
    {
             $request= request() ->except('_token','_method');
         partida::where('id', $id)->update([
            'hora_inicio' => $request['hora_inicio'],
            'hora_final' => $request['hora_final'],
			'fecha_partida' => $request['fecha_partida'],
			'estado_partida' => $request['estado_partida'],
                        
        ]);
        
        $partidas = partida::All();
        return redirect()->route('partidas.index',['partidas' => $partidas])->with('status','Partida editado con éxito');
    }

   
    public function destroy($id)
    {
          partida::destroy($id);

        $partidas = partida::All();
        return redirect()->route('partidas.index',['partidas' => $partidas])->with('status','Partida eliminado con éxito');
    }
}