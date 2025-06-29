<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComisionController;

// Ruta raíz (opcional, puedes eliminarla si no la usas)
Route::get('/', function () {
    return view('welcome');
});

// Rutas del MiniCore
Route::get('/comisiones', [ComisionController::class, 'index'])
     ->name('comisiones.index');

Route::post('/comisiones', [ComisionController::class, 'calcular'])
     ->name('comisiones.calcular');