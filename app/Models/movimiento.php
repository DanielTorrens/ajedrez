<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movimiento extends Model
{
    protected $table="movimientos";	
	protected $foreignKey=["partida_id"];
    protected $fillable=["color","movimiento"];	
	protected $primaryKey = ['id', 'color'];	
	public $incrementing = false;
    public $timestamps = false;
	
		public function partida()
    {
        return $this->belongsTo(partida::class);
    }
}
