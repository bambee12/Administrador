<?php

use Illuminate\Support\Facades\Route;

// Ruta para el dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/inventario', function () {
    return view('gestion_inventario');
})->name('gestion_inventario');

Route::get('/cotizaeven', function () {
    return view('cotizacioneseven');
})->name('cotizacioneseven');

Route::get('/cotizaflor', function () {
    return view('cotizaflor');
})->name('cotizaflor');

Route::get('/reportes', function () {
    return view('reportes');
})->name('reportes');

Route::get('/login', function () {
    return view('login');
})->name('login');