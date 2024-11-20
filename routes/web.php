<?php

use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\CanalController;
use App\Http\Controllers\CarpetaController;
use App\Http\Controllers\ComentarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::controller(CarpetaController::class)->group(function(){
    Route::get('/crearCarpeta', 'create');
    Route::post('/guardarCarpeta', 'store');
    Route::get('/abrirCarpeta/{id}', 'show');
});

Route::controller(CanalController::class)->group(function(){
    Route::get('/crearCanal', 'create');
    Route::post('/guardarCanal', 'store');
    Route::get('/abrirCanal/{id}', 'show');
    
});

Route::controller(ArchivoController::class)->group(function(){
    Route::get('/archivos', 'index');
    Route::post('/guardarArchivo/{id}', 'store');
    Route::get('/archivo/{ruta}', 'descargarArchivio');
    Route::get('/eliminarArchivo/{id}', 'eliminarArchivo');
});

Route::controller(ComentarioController::class)->group(function(){
    Route::get('/archivos', 'index');
    Route::post('/guardarComentario/{id}', 'store');

});