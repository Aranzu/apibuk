<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\LicenciaPermisoController;
use App\Http\Controllers\VacacionesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/trabajador', [TrabajadorController::class,'index']);
Route::get('/trabajador/{id}', [TrabajadorController::class,'consultaIndividual']);
Route::post('/trabajador', [TrabajadorController::class,'store']);
Route::put('/trabajador/{id}', [TrabajadorController::class,'update']);
Route::delete('/trabajador/{id}', [TrabajadorController::class,'destroy']);

Route::get('/vacaciones', [VacacionesController::class,'index']);

Route::get('/licenciapermiso', [LicenciaPermisoController::class,'index']);

