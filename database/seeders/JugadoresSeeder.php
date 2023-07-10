<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JugadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario1 = Usuario::find(1);

        DB::table('jugadores')->insert([
            'nombre' => 'Jugador 1',
            'usuario_id' => $usuario1->id,
        ]);
    
        $usuario2 = Usuario::find(2);
    
        DB::table('jugadores')->insert([
            'nombre' => 'Jugador 2',
            'usuario_id' => $usuario2->id,
        ]);
}

}
