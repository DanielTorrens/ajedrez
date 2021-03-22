<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugador_partida extends Model
{
    //protected $primaryKey=['jugador_id", "partida_id'];
	protected $primaryKey="id";	
	protected $foreignKey=["jugador_id", "partida_id"];
    public $timestamps = false;
    protected $fillable=["color", "resultado"];
	
}
