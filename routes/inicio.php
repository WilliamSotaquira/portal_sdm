<?php

use Illuminate\Support\Facades\Route;

Route::prefix('inicio')->group(function () {
    // home
    Route::view('/home', 'inicio.home')->name('inicio.home');

    // desembargos
    Route::view('/desembargos', 'inicio.desembargos')->name('inicio.desembargos');
    // comparendos
    Route::view('/comparendos', 'inicio.comparendos')->name('inicio.comparendos');
    // ms
    Route::view('/ms', 'inicio.ms')->name('inicio.ms');

    // rutas inicio/tramites-servicios
    Route::prefix('tramites-servicios')->group(function () {
        Route::view('/comparendos', 'inicio.tramites-servicios.comparendos')->name('inicio.tramites-servicio.comparendos');
        Route::view('/frecuentes', 'inicio.tramites-servicios.frecuentes')->name('inicio.tramites-servicio.frecuentes');
    });

    // menu-principal
    Route::view('/menu-principal', 'inicio.menu-principal')->name('inicio.menu-principal');
});
