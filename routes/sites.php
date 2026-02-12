<?php

use Illuminate\Support\Facades\Route;

Route::prefix('sites')->group(function () {

    Route::get('/dscsm', function () {
        return view('sites.dscsm');
    })->name('sites.dscsm');
    //conciliacion ruta
    Route::get('/conciliacion', function () {
        return view('sites.conciliacion');
    })->name('sites.conciliacion');




});
