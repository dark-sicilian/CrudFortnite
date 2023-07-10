<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $jugador1 = Jugador::find(1);
        
            DB::table('partidas')->insert([
                'nombre' => 'Partida 1',
                'jugador_id' => $jugador1->id,
                'puntaje' => 100,
            ]);
        
            $jugador2 = Jugador::find(2);
        
            DB::table('partidas')->insert([
                'nombre' => 'Partida 2',
                'jugador_id' => $jugador2->id,
                'puntaje' => 200,
            ]);
        
            // Puedes agregar más registros de partidas si lo deseas
        }
        
        //
    }
}
