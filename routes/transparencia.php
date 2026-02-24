<?php

use Illuminate\Support\Facades\Route;

Route::prefix('transparencia')->name('transparencia.')->group(function () {
    Route::view('/', 'transparencia.index')->name('index');

    // grupo 1
    Route::prefix('1')->name('1.')->group(function () {
        // agremiaciones
        Route::view('agremiaciones', 'transparencia.1.agremiaciones')->name('agremiaciones');
    });
});
