<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\torneoController;
use App\Http\Controllers\paisController;
use App\Http\Controllers\clubController;
use App\Http\Controllers\movimientoController;
use App\Http\Controllers\arbitroController;
use App\Http\Controllers\jugadorController;
use App\Http\Controllers\partidaController;

Route::get('/', function () {
	return view('chess');
})->name('chess');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource("/torneos", torneoController::class);
Route::resource("/clubes", clubController::class);
Route::resource("/movimientos", movimientoController::class);
Route::resource("/arbitros", arbitroController::class);
Route::resource("/jugadores", jugadorController::class);
Route::resource("/partidas", partidaController::class);


