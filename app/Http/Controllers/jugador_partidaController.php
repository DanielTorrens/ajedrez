<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jugador_partida;
use App\Models\jugador;
use App\Models\partida;
use App\Models\torneo;

class jugador_partidaController extends Controller
{
		public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
		//$jugadores_partidas = jugador_partida::all();
        $jugadores_partidas = jugador_partida::with('jugador', 'partida')->get();
        // $partidas = partida::with('torneo', 'arbitro')->get();
        return view("jugador_partida.index",compact("jugadores_partidas"));
    }

    
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
    }

   
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        
    }

  
    public function update(Request $request, $id)
    {
        
    }

  
    public function destroy($id)
    {
        
    }
}
