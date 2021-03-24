<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class torneo extends Model
{
    protected $table="torneos";
    protected $primaryKey="id";
    public $timestamps = false;
    protected $fillable=["nombre_torneo","f_inicio","f_final"];
	
	public function getYearAttribute(){
    	return Carbon::parse($this->attributes['f_inicio'])->year;
	}
	
		 public function partidas()
    {
        return $this->hasMany(partida::class);
    }

}
