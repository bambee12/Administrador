<?php

use Illuminate\Support\Facades\Route;

// Ruta para el dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/inventario', function () {
    return view('gestion_inventario');
})->name('gestion_inventario');