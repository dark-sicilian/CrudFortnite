<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('usuarios')->insert([
        'nombre' => 'Dark Sicilian',
        'email' => 'hectorsicilian@gmail.com',
        'password' => bcrypt('password'),
    ]);

    DB::table('usuarios')->insert([
        'nombre' => 'Jane Smith',
        'email' => 'jane@example.com',
        'password' => bcrypt('password'),
    ]);
}
}