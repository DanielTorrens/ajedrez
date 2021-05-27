<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jugador;
use App\Models\club;

class jugadorController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
	{        	
		$jugadores = jugador::with('club')->get();

		return view('jugadores.index')->with('jugadores', $jugadores);
    }
  
    public function create()
    {
        $clubs=club::pluck("id", "nombre_club");
		
		return view('jugadores.create', ["jugador"=>new jugador(), "clubs"=>$clubs]); 
    }
   
    public function store(Request $request)
    {
        
         jugador::create([
            'nombre_jugador' => $request['nombre_jugador'],
            'apellidos_jugador' => $request['apellidos_jugador'],
			'ELO' => $request['ELO'],
			'titulo_jugador' => $request['titulo_jugador'],
			'fecha_titulo' => $request['fecha_titulo'],
            'nacionalidad_jugador' => $request['nacionalidad_jugador'],
		    'email_jugador' => $request['email_jugador'],
            'telefono_jugador' => $request['telefono_jugador'],
			'club_id' => $request['club_id'],      
 ]);
        $jugadores = jugador::All();
        return redirect()->route('jugadores.index',['jugadores' => $jugadores])->with('status','Jugador se ha creado con éxito');
    }
  
    public function show($id)
    {
        
    }
   
    public function edit($id)
    { 
		$clubs=club::pluck("id", "nombre_club");
        $jugador = jugador::findOrFail($id);
        return view('jugadores.edit', compact("jugador"), compact("clubs"));   
    }
    
    public function update(Request $request, $id)
    {
             $request= request() ->except('_token','_method');
         jugador::where('id', $id)->update([
            'nombre_jugador' => $request['nombre_jugador'],
            'apellidos_jugador' => $request['apellidos_jugador'],
			'ELO' => $request['ELO'],
			'titulo_jugador' => $request['titulo_jugador'],
			'fecha_titulo' => $request['fecha_titulo'],
            'nacionalidad_jugador' => $request['nacionalidad_jugador'],
		    'email_jugador' => $request['email_jugador'],
            'telefono_jugador' => $request['telefono_jugador'],
			'club_id' => $request['club_id'],
        ]);
        
        $jugadores = jugador::All();
        return redirect()->route('jugadores.index',['jugadores' => $jugadores])->with('status','Jugador editado con éxito');
    }
   
    public function destroy($id)
    {
        $jugador=jugador::findOrFail($id);
		jugador::destroy($id);

        return redirect()->route('jugadores.index')->with('status','Jugador eliminado con éxito');
    }
}