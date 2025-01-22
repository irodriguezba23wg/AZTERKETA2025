<?php
use App\Http\Controllers\EkitaldiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::middleware('auth:sanctum')->group(function() {

    Route::apiResource('ekitaldiak', EkitaldiController::class);
    Route::post('/izenaeman/{id}', [EkitaldiController::class, 'addDentistaToEkitaldi']);
    Route::middleware('role:admin')->get('/dentistak', [UserController::class, 'getAllDentists']);  
    Route::get('/partehartzaileak/{id}', [EkitaldiController::class, 'getPartehartzaileak']); 
    Route::get('/ekitaldiak/{id}', [EkitaldiController::class, 'getEkitaldiakForDentista']);  

});
