<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\club;

class clubController extends Controller
{
    
    public function index()
    {
        $clubes=club::all();
		
		return view("clubes.index",compact("clubes"));
    }

   
    public function create()
    {
            return view('clubes.create'); 
    }

 
    public function store(Request $request)
    {
            club::create([
            	'nombre_club' => $request['nombre_club'],
            	'pais_club' => $request['pais_club'],
            	'email_club' => $request['email_club'],
				'telefono_club' => $request['telefono_club'],
				
       
 			]);
		
        $clubes = club::All();
        return redirect()->route('clubes.index',['clubes' => $clubes])->with('status','Club creado con éxito');
    }

   
    public function show($id)
    {
        
    }


    public function edit($id)
    {
           $club = club::findOrFail($id);
           return view('clubes.edit', compact("club"));   
    }

    
    public function update(Request $request, $id)
    {
        $request= request() ->except('_token','_method');
         	  club::where('id', $id)->update([
              	  	'nombre_club' => $request['nombre_club'],
            		'pais_club' => $request['pais_club'],
            		'email_club' => $request['email_club'],
					'telefono_club' => $request['telefono_club'],
                        
        ]);
        
        $clubes = club::All();
        return redirect()->route('clubes.index',['clubes' => $clubes])->with('status','Club editado con éxito');
    }

  
    public function destroy($id)
    {
         club::destroy($id);

         $clubes = club::All();
         return redirect()->route('clubes.index',['clubes' => $clubes])->with('status','Club eliminado con éxito');
    }
}