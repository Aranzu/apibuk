<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\LicenceController;
use App\Http\Controllers\VacationsController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AuthController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);

Route::get('/employees', [EmployeesController::class,'index'])->middleware('auth:sanctum');
Route::get('/employees/{id}', [EmployeesController::class,'consRutTra'])->middleware('auth:sanctum');


Route::get('/vacations', [VacationsController::class,'index'])->middleware('auth:sanctum');
Route::get('/vacations/{id}', [VacationsController::class,'idVac'])->middleware('auth:sanctum');

Route::get('/licence', [LicenceController::class,'index'])->middleware('auth:sanctum');
Route::get('/licence/{id}', [LicenceController::class,'idLic'])->middleware('auth:sanctum');

Route::get('/permission', [PermissionController::class,'index'])->middleware('auth:sanctum');
Route::get('/permission/{id}', [PermissionController::class,'idPer'])->middleware('auth:sanctum');

