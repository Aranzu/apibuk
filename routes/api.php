<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\LicenciaPermisoController;
use App\Http\Controllers\VacacionesController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/trabajador', [TrabajadorController::class,'index']);
Route::get('/trabajador/{empleadoRut}', [TrabajadorController::class,'consRutTra']);


Route::get('/vacaciones', [VacacionesController::class,'index']);
Route::get('/vacaciones/{rut}', [VacacionesController::class,'consRutVac']);

Route::get('/licenciapermiso', [LicenciaPermisoController::class,'index']);
Route::get('/licenciapermiso/{rut}', [LicenciaPermisoController::class,'consRutlic']);

