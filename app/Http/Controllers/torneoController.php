<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\torneo;

class torneoController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
          $torneos=torneo::all();
		
		return view("torneos.index",compact("torneos"));
    }

  
    public function create()
    {
        return view('torneos.create'); 
    }

   
    public function store(Request $request)
    {
        
         torneo::create([
            'nombre_torneo' => $request['nombre_torneo'],
            'f_inicio' => $request['f_inicio'],
            'f_final' => $request['f_final'],
       
 ]);
        $torneos = torneo::All();
        return redirect()->route('torneos.index',['torneos' => $torneos])->with('status','Torneo se ha creado con éxito');
    }

  
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $torneo = torneo::findOrFail($id);
        return view('torneos.edit', compact("torneo"));   
    }

    
    public function update(Request $request, $id)
    {
             $request= request() ->except('_token','_method');
         		torneo::where('id', $id)->update([
            		'nombre_torneo' => $request['nombre_torneo'],
            		'f_inicio' => $request['f_inicio'],
            		'f_final' => $request['f_final'],
                        
        ]);
        
        $torneos = torneo::All();
        return redirect()->route('torneos.index',['torneos' => $torneos])->with('status','Torneo editado con éxito');
    }
	   
    public function destroy(torneo $torneo)
    {
		
		$torneo->delete();

        return redirect()->route('torneos.index')->with('status','Torneo eliminado con éxito');
    }
}