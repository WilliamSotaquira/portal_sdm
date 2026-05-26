<?php

use Illuminate\Support\Facades\Route;

Route::prefix('sites')->name('sites.')->group(function () {

    // cem ruta
    Route::view('/cem', 'sites.cem')->name('cem');
    Route::view('/dscsm', 'sites.dscsm')->name('dscsm');
    //conciliacion ruta
    Route::view('/conciliacion', 'sites.conciliacion')->name('conciliacion');
    // reto ruta
    Route::view('/reto', 'sites.reto')->name('reto');
    // barrios vitales ruta
    Route::view('/barrios_vitales', 'sites.barrios_vitales')->name('barrios_vitales');
    // ms ruta
    Route::view('/ms', 'sites.ms')->name('ms');
    //sir ruta
    Route::view('/sir', 'sites.sir')->name('sir');
    // gerencia en via ruta
    Route::view('/gerencia-en-via', 'sites.gerencia-en-via')->name('gerencia-en-via');

    // fotodeteccion rutas
    Route::view('/fotodeteccion', 'sites.fotodeteccion.index')->name('fotodeteccion');
    Route::view('/fotodeteccion/que-son', 'sites.fotodeteccion.que-son')->name('fotodeteccion.que-son');
    Route::view('/fotodeteccion/proceso', 'sites.fotodeteccion.proceso')->name('fotodeteccion.proceso');
    Route::view('/fotodeteccion/ubicacion', 'sites.fotodeteccion.ubicacion')->name('fotodeteccion.ubicacion');
    Route::view('/fotodeteccion/infracciones', 'sites.fotodeteccion.infracciones')->name('fotodeteccion.infracciones');
    Route::view('/fotodeteccion/transparencia', 'sites.fotodeteccion.transparencia')->name('fotodeteccion.transparencia');
    Route::view('/fotodeteccion/comparendo', 'sites.fotodeteccion.comparendo')->name('fotodeteccion.comparendo');
    Route::view('/fotodeteccion/preguntas', 'sites.fotodeteccion.preguntas')->name('fotodeteccion.preguntas');

});
