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
Route::view('/menu', 'menu')->name('menu');

// Fallback para archivos Drupal en entornos donde no existe /sites/default/files local.
Route::get('/sites/default/files/{path}', function (\Illuminate\Http\Request $request, string $path) {
    $filesHost = rtrim(env('DRUPAL_FILES_HOST', 'https://ovprdnwportwebapp01.movilidadbogota.gov.co'), '/');
    $target = $filesHost . '/sites/default/files/' . ltrim($path, '/');
    $query = $request->getQueryString();

    if (!empty($query)) {
        $target .= '?' . $query;
    }

    return redirect()->away($target);
})->where('path', '.*');

// Cargar todas las rutas del sistema
require __DIR__ . '/inicio.php';
require __DIR__ . '/transparencia.php';
require __DIR__ . '/atencion-servicios.php';
require __DIR__ . '/participa.php';
require __DIR__ . '/entidad.php';
require __DIR__ . '/sites.php';
