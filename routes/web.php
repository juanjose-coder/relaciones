<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Actividad 4 (vista final: teléfonos + roles)
Route::get('/', [UserController::class, 'index'])->name('index');

// Actividad 2: Uno a Uno
Route::get('/actividad2', [UserController::class, 'actividad2'])->name('actividad2');

// Actividad 3: Uno a Muchos
Route::get('/actividad3', [UserController::class, 'actividad3'])->name('actividad3');
