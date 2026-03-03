<?php

use Illuminate\Support\Facades\Route;

Route::prefix('sites')->name('sites.')->group(function () {

    Route::view('/dscsm', 'sites.dscsm')->name('dscsm');
    //conciliacion ruta
    Route::view('/conciliacion', 'sites.conciliacion')->name('conciliacion');
    // ms ruta
    Route::view('/ms', 'sites.ms')->name('ms');
    //sir ruta
    Route::view('/sir', 'sites.sir')->name('sir');




});
