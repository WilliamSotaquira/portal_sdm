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

    // rutas inicio/atencion-servicios
    Route::prefix('atencion-servicios')->name('atencion-servicios.')->group(function () {
        Route::prefix('tramites-servicios')->name('tramites-servicios.')->group(function () {
            Route::view('/', 'inicio.atencion-servicios.tramites-servicios.index')->name('index');
            Route::view('/comparendos', 'inicio.atencion-servicios.comparendos')->name('comparendos');
            Route::view('/frecuentes', 'inicio.atencion-servicios.frecuentes')->name('frecuentes');
            Route::view('/pqrsd', 'inicio.atencion-servicios.pqrsd')->name('pqrsd');
            Route::prefix('pqrsd')->name('pqrsd.')->group(function () {
                Route::view('/anticorrupcion', 'inicio.atencion-servicios.pqrsd.anticorrupcion')->name('anticorrupcion');
            });
        });
    });

    // menu-principal
    Route::view('/menu-principal', 'inicio.menu-principal')->name('menu-principal');
});
