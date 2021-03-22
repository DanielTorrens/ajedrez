<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arbitro extends Model
{
    protected $table="arbitros";
    protected $primaryKey="id";
    public $timestamps = false;
    protected $fillable=["nombre_arbitro","apellidos_arbitro","nacionalidad_arbitro","email_arbitro","telefono_arbitro"];
	
	 public function partidas()
    {
        return $this->hasMany(partida::class);
    }
	
}

