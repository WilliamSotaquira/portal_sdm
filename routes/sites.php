<?php

use Illuminate\Support\Facades\Route;

Route::prefix('sites')->name('sites.')->group(function () {

    // cem ruta
    Route::view('/cem', 'sites.cem')->name('cem');
    Route::view('/dscsm', 'sites.dscsm')->name('dscsm');
    //conciliacion ruta
    Route::view('/conciliacion', 'sites.conciliacion')->name('conciliacion');
    // barrios vitales ruta
    Route::view('/barrios_vitales', 'sites.barrios_vitales')->name('barrios_vitales');
    // ms ruta
    Route::view('/ms', 'sites.ms')->name('ms');
    //sir ruta
    Route::view('/sir', 'sites.sir')->name('sir');
    // gerencia en via ruta
    Route::view('/gerencia-en-via', 'sites.gerencia-en-via')->name('gerencia-en-via');




});
