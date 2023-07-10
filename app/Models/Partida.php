<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $fillable = ['nombre', 'jugador_id', 'puntaje'];

    public function jugador()
    {
        return $this->belongsTo(Jugador::class, 'jugador_id');
    }
}
