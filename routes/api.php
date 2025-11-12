<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Middleware\IsDriverMiddleware;
use App\Http\Controllers\PassengerController;

//driver routes 
// Route::prefix('carpooling')->middleware(['auth:sanctum',IsDriverMiddleware::class])->controller(DriverController::class)->group(function () {
//     Route::post('create-driver-ride','create_driver_ride');
// });

//fake api
Route::prefix('carpooling/drivers')->controller(DriverController::class)->group(function () {
    Route::post('create-driver-ride','create_driver_ride');
});

//passenger routes  

Route::prefix('carpooling/passengers')->controller(PassengerController::class)->group(function () {
    Route::post('','view_carpool_rides');
});


