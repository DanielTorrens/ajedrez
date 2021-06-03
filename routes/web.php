<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\torneoController;
use App\Http\Controllers\paisController;
use App\Http\Controllers\clubController;
use App\Http\Controllers\movimientoController;
use App\Http\Controllers\arbitroController;
use App\Http\Controllers\jugadorController;
use App\Http\Controllers\partidaController;
use App\Http\Controllers\jugador_partidaController;

URL::forceScheme('https');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
	return view('/auth/login');
})->name('inicio-login'); 

Auth::routes();

 Route::get('/chess', function () {
	return view('chess');
})->name('chess'); 

Route::resource("/torneos", torneoController::class);
Route::resource("/clubes", clubController::class);
Route::resource("/movimientos", movimientoController::class);
Route::resource("/arbitros", arbitroController::class);
Route::resource("/jugadores", jugadorController::class);
Route::resource("/partidas", partidaController::class);
Route::resource("/jugador_partida", jugador_partidaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
