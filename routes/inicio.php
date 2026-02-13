<?php

use Illuminate\Support\Facades\Route;

Route::prefix('inicio')->name('inicio.')->group(function () {
    // home
    Route::view('/home', 'inicio.home')->name('home');

    // desembargos
    Route::view('/desembargos', 'inicio.desembargos')->name('desembargos');
    // comparendos
    Route::view('/comparendos', 'inicio.comparendos')->name('comparendos');
    // ms
    Route::view('/ms', 'inicio.ms')->name('ms');

    // rutas inicio/tramites-servicios
    Route::prefix('tramites-servicios')->name('tramites-servicios.')->group(function () {
        Route::view('/comparendos', 'inicio.tramites-servicios.comparendos')->name('comparendos');
        Route::view('/frecuentes', 'inicio.tramites-servicios.frecuentes')->name('frecuentes');
        Route::view('/pqrsd', 'inicio.tramites-servicios.pqrsd')->name('pqrsd');
    });

    // menu-principal
    Route::view('/menu-principal', 'inicio.menu-principal')->name('menu-principal');
});
