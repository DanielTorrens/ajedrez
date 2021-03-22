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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/torneos', [torneoController::class, 'index'])->name('torneos.index');
Route::get('/torneos/delete/{id}', [torneoController::class, 'destroy'])->name('torneos.destroy');
Route::get('/torneos/{id}/edit', [torneoController::class, 'edit'])->name('torneos.edit');
Route::put('/torneos/{id}', [torneoController::class, 'update'])->name('torneos.update');
Route::get('/torneos/create', [torneoController::class, 'create'])->name('torneos.create');
Route::post('/torneos', [torneoController::class, 'store'])->name('torneos.store');

Route::get('/clubes', [clubController::class, 'index'])->name('clubes.index');
Route::get('/clubes/delete/{id}', [clubController::class, 'destroy'])->name('clubes.destroy');
Route::get('/clubes/{id}/edit', [clubController::class, 'edit'])->name('clubes.edit');
Route::put('/clubes/{id}', [clubController::class, 'update'])->name('clubes.update');
Route::get('/clubes/create', [clubController::class, 'create'])->name('clubes.create');
Route::post('/clubes', [clubController::class, 'store'])->name('clubes.store');

Route::get('/movimientos', [movimientoController::class, 'index'])->name('movimientos.index');
Route::get('/movimientos/delete/{id}', [movimientoController::class, 'destroy'])->name('movimientos.destroy');
Route::get('/movimientos/{id}/edit', [movimientoController::class, 'edit'])->name('movimientos.edit');
Route::put('/movimientos/{id}', [movimientoController::class, 'update'])->name('movimientos.update');
Route::get('/movimientos/create', [movimientoController::class, 'create'])->name('movimientos.create');
Route::post('/movimientos', [movimientoController::class, 'store'])->name('movimientos.store');

Route::get('/arbitros', [arbitroController::class, 'index'])->name('arbitros.index');
Route::get('/arbitros/delete/{id}', [arbitroController::class, 'destroy'])->name('arbitros.destroy');
Route::get('/arbitros/{id}/edit', [arbitroController::class, 'edit'])->name('arbitros.edit');
Route::put('/arbitros/{id}', [arbitroController::class, 'update'])->name('arbitros.update');
Route::get('/arbitros/create', [arbitroController::class, 'create'])->name('arbitros.create');
Route::post('/arbitros', [arbitroController::class, 'store'])->name('arbitros.store');

Route::get('/jugadores', [jugadorController::class, 'index'])->name('jugadores.index');
Route::get('/jugadores/delete/{id}', [jugadorController::class, 'destroy'])->name('jugadores.destroy');
Route::get('/jugadores/{id}/edit', [jugadorController::class, 'edit'])->name('jugadores.edit');
Route::put('/jugadores/{id}', [jugadorController::class, 'update'])->name('jugadores.update');
Route::get('/jugadores/create', [jugadorController::class, 'create'])->name('jugadores.create');
Route::post('/jugadores', [jugadorController::class, 'store'])->name('jugadores.store');

Route::get('/partidas', [partidaController::class, 'index'])->name('partidas.index');
Route::get('/partidas/delete/{id}', [partidaController::class, 'destroy'])->name('partidas.destroy');
Route::get('/partidas/{id}/edit', [partidaController::class, 'edit'])->name('partidas.edit');
Route::put('/partidas/{id}', [partidaController::class, 'update'])->name('partidas.update');
Route::get('/partidas/create', [partidaController::class, 'create'])->name('partidas.create');
Route::post('/partidas', [partidaController::class, 'store'])->name('partidas.store');


