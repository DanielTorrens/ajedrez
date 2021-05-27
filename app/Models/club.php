<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    protected $table="clubes";
    protected $primaryKey="id";
    public $timestamps = false;
    protected $fillable=["nombre_club", "slug","pais_club", "email_club", "telefono_club"];
	
/*	 public function getRouteKeyName()
    {
        return "slug";
    } */
	
	 public function jugadores()
    {
        return $this->hasMany(jugador::class);
    }

}

