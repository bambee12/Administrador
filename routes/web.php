<?php

use Illuminate\Support\Facades\Route;

// Ruta para el dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
