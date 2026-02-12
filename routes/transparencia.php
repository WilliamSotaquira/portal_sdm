<?php

use Illuminate\Support\Facades\Route;

Route::prefix('transparencia')->group(function () {
    // grupo 1
    Route::prefix('1')->group(function () {
        // agremiaciones
        Route::get('agremiaciones', function () {
            return view('transparencia.1.agremiaciones');
        })->name('transparencia.1.agremiaciones');
    });
});
