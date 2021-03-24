<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class partida extends Model
{
    protected $table="partidas";
    protected $primaryKey="id";
	protected $foreignKey=["arbitro_id","torneo_id"];
    public $timestamps = false;
    protected $fillable=["hora_inicio","hora_final","fecha_partida","estado_partida","arbitro_id","torneo_id"];
	
	public function getHourAttribute()
{
	
    return Carbon::parse($this->attributes['hora_inicio'])->diffForHumans($this->attributes['hora_final']);
}
	
		public function torneo()
    {
        return $this->belongsTo(torneo::class);
    }
	
		public function arbitro()
    {
        return $this->belongsTo(arbitro::class);
    }
	
		public function movimientos()
    {
        return $this->hasMany(movimiento::class);
    }
	
	public function jugador()
    {
        return $this->belongsToMany(jugador::class, "jugador_partida");
    }
}