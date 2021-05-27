<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
     protected $table="jugadores";

    protected $primaryKey="id";
	protected $foreignKey=["club_id"];
    public $timestamps = false;
    protected $fillable=["nombre_jugador","apellidos_jugador","ELO","titulo_jugador","fecha_titulo","nacionalidad_jugador","email_jugador","telefono_jugador","club_id"];
	
	public function club()
    {		  
        return $this->belongsTo(club::class);
    }
	
	 public function partida()
    {
        return $this->belongsToMany(partida::class, "jugador_partida");
		 jugador::with('club');
    }
}