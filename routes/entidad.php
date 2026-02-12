<?php

use Illuminate\Support\Facades\Route;

Route::prefix('entidad')->group(function () {


    Route::view('/sg', 'entidad.sg')->name('entidad.sg');
    Route::view('/organigrama', 'entidad.organigrama')->name('entidad.organigrama');

    // Sistemas de Gestión
    Route::prefix('sistemas-gestion')->group(function () {
        // Ruta: /entidad/sistemas-gestion/ambiental
        Route::view('/ambiental', 'entidad.sistemas-gestion.ambiental')->name('entidad.sistemas-gestion.ambiental');
        Route::view('/continuidad', 'entidad.sistemas-gestion.continuidad')->name('entidad.sistemas-gestion.continuidad');
        Route::view('/sgsst', 'entidad.sistemas-gestion.sgsst')->name('entidad.sistemas-gestion.sgsst');
    });
});
