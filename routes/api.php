<?php

use App\Http\Controllers\Api\FuncionesController as APIFuncionesController;
use App\Http\Controllers\Api\SalasController as APISalasController;
use App\Http\Controllers\Api\GenerosController as APIGenerosController;
use App\Http\Controllers\Api\PeliculasController as APIPeliculasController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}
);



Route::get('/funciones',[APIFuncionesController::class,'index'])->name('api.funciones.index');

Route::get('/salas',[APISalasController::class,'index'])->name('api.salas.index');

Route::get('/generos',[APIGenerosController::class,'index'])->name('api.generos.index');

Route::get('/peliculas',[APIPeliculasController::class,'index'])->name('api.funciones.index');
