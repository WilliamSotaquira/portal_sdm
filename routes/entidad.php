<?php

use Illuminate\Support\Facades\Route;

Route::prefix('entidad')->name('entidad.')->group(function () {


    Route::view('/sg', 'entidad.sg')->name('sg');
    Route::view('/organigrama', 'entidad.organigrama')->name('organigrama');

    // Sistemas de Gestión
    Route::prefix('sistemas-gestion')->name('sistemas-gestion.')->group(function () {
        // Ruta: /entidad/sistemas-gestion/ambiental
        Route::view('/ambiental', 'entidad.sistemas-gestion.ambiental')->name('ambiental');
        Route::view('/continuidad', 'entidad.sistemas-gestion.continuidad')->name('continuidad');
        Route::view('/sgsst', 'entidad.sistemas-gestion.sgsst')->name('sgsst');
    });
});
