<?php

use Illuminate\Support\Facades\Route;

Route::prefix('atencion-servicios')->group(function () {
    // puntos de atención
    Route::view('/puntos-atencion', 'atencion-servicios.puntos-atencion');
});
