<?php

use Illuminate\Support\Facades\Route;

// Página principal - Dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('home');

// Dashboard alternativo
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Convocatorias de cultura
Route::view('/culturas', 'culturas')->name('culturas');

// Cargar todas las rutas del sistema
require __DIR__ . '/inicio.php';
require __DIR__ . '/transparencia.php';
require __DIR__ . '/atencion-servicios.php';
require __DIR__ . '/participa.php';
require __DIR__ . '/entidad.php';
require __DIR__ . '/sites.php';
