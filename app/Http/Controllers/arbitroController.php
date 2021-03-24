<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\arbitro;

class arbitroController extends Controller
{
    
    public function index()
    {
          $arbitros=arbitro::all();
		
		  return view("arbitros.index",compact("arbitros"));
    }

  
    public function create()
    {
        return view('arbitros.create'); 
    }

   
    public function store(Request $request)
    {
        
         arbitro::create([
            'nombre_arbitro' => $request['nombre_arbitro'],
            'apellidos_arbitro' => $request['apellidos_arbitro'],
			'nacionalidad_arbitro' => $request['nacionalidad_arbitro'],
			'email_arbitro' => $request['email_arbitro'],
            'telefono_arbitro' => $request['telefono_arbitro'],
       
 ]);
        $arbitros = arbitro::All();
        return redirect()->route('arbitros.index',['arbitros' => $arbitros])->with('status','Árbitro se ha creado con éxito');
    }

  
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $arbitro = arbitro::findOrFail($id);
        return view('arbitros.edit', compact("arbitro"));   
    }

    
    public function update(Request $request, $id)
    {
             $request= request() ->except('_token','_method');
         arbitro::where('id', $id)->update([
            'nombre_arbitro' => $request['nombre_arbitro'],
            'apellidos_arbitro' => $request['apellidos_arbitro'],
			'nacionalidad_arbitro' => $request['nacionalidad_arbitro'],
			'email_arbitro' => $request['email_arbitro'],
            'telefono_arbitro' => $request['telefono_arbitro'],
                        
        ]);
        
        $arbitros = arbitro::All();
        return redirect()->route('arbitros.index',['arbitros' => $arbitros])->with('status','Árbitro editado con éxito');
    }

   
    public function destroy(arbitro $arbitro)
    {
          $arbitro->delete();

        return redirect()->route('arbitros.index')->with('status','Árbitro eliminado con éxito');
    }
}


