<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nombre', 'email', 'password'];

    public function jugadores()
    {
        return $this->hasMany(Jugador::class, 'usuario_id');
    }
}