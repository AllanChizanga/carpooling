<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;

//driver routes 
// Route::prefix('carpooling')->middleware('auth:sanctum')->controller(DriverController::class)->group(function () {
//     Route::post('create-driver-ride','create_driver_ride');
// });

//fake api
Route::prefix('carpooling')->controller(DriverController::class)->group(function () {
    Route::post('create-driver-ride','create_driver_ride');
});
//passenger routes 

