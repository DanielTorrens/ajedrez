<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jugador;

class jugadorController extends Controller
{
  
    public function index()
    {
          $jugadores=jugador::all();
		
		return view("jugadores.index",compact("jugadores"));
    }

  
    public function create()
    {
        return view('jugadores.create'); 
    }

   
    public function store(Request $request)
    {
        
         jugador::create([
            'nombre_jugador' => $request['nombre_jugador'],
            'apellidos_jugador' => $request['apellidos_jugador'],
			'ELO' => $request['ELO'],
			'titulo' => $request['titulo'],
			'fecha_titulo' => $request['fecha_titulo'],
            'nacionalidad_jugador' => $request['nacionalidad_jugador'],
		    'email_jugador' => $request['email_jugador'],
            'telefono_jugador' => $request['telefono_jugador'],
		
          
            
       
 ]);
        $jugadores = jugador::All();
        return redirect()->route('jugadores.index',['jugadores' => $jugadores])->with('status','Jugador se ha creado con éxito');
    }

  
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $jugador = jugador::findOrFail($id);
        return view('jugadores.edit', compact("jugador"));   
    }

    
    public function update(Request $request, $id)
    {
             $request= request() ->except('_token','_method');
         jugador::where('id', $id)->update([
           'nombre_jugador' => $request['nombre_jugador'],
            'apellidos_jugador' => $request['apellidos_jugador'],
			'ELO' => $request['ELO'],
			'titulo' => $request['titulo'],
			'fecha_titulo' => $request['fecha_titulo'],
            'nacionalidad_jugador' => $request['nacionalidad_jugador'],
		    'email_jugador' => $request['email_jugador'],
            'telefono_jugador' => $request['telefono_jugador'],
		
                        
        ]);
        
        $jugadores = jugador::All();
        return redirect()->route('jugadores.index',['jugadores' => $jugadores])->with('status','Jugador editado con éxito');
    }

   
    public function destroy($id)
    {
          jugador::destroy($id);

        $jugadores = jugador::All();
        return redirect()->route('jugadores.index',['jugadores' => $jugadores])->with('status','Jugador eliminado con éxito');
    }
}