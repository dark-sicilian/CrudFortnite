<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\PartidaController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para el controlador de usuarios
Route::resource('usuarios', UsuarioController::class);

// Rutas para el controlador de jugadores
Route::resource('jugadores', JugadorController::class);

// Rutas para el controlador de partidas
Route::resource('partidas', PartidaController::class);

