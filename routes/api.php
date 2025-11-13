<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RideController;
use App\Http\Middleware\IsAuthenticated;
use App\Http\Controllers\DriverController;
use App\Http\Middleware\IsDriverMiddleware;
use App\Http\Controllers\PassengerController;


//Driver APIS
Route::prefix('carpooling/drivers')->middleware(IsAuthenticated::class)->controller(DriverController::class)->group(function () {

    Route::post('create-driver-ride','create_driver_ride');   //tested and working 
    //drive view bookings for his ride 
    Route::get('ride-bookings/{ride_id}', 'ride_bookings');
    //accept ride request 
    Route::get('accept-ride-booking/{ride_booking_id}','accept_ride_booking');
    //driver cancel booking 
    Route::get('cancel-ride-booking/{ride_booking_id}','cancel_ride_booking'); 
    //cancel ride 
    Route::get('cancel-ride/{ride_id}','cancel_ride'); 




});
//endpoints for the ride entity
Route::prefix('carpooling/drivers')->middleware(IsAuthenticated::class)->controller(RideController::class)->group(function () {
    //cancel ride 
    Route::get('cancel-ride/{ride_id}','cancel_ride'); 
    //create ride from ride --driver can use previous ride info to create a new ride 
    Route::get('create-from-ride/{ride_id}','create_from_ride');
    //open ride
    Route::get('open-ride/{ride_id}','open_ride');
    //start ride 
    Route::get('start-ride/{ride_id}','start_ride');
    //end ride
    Route::get('end-ride/{ride_id}','end_ride');
    //view ride  histories details 
    Route::get('view-ride-hsitories/{driver_vehicle_id}','view_ride_histories');
   //create ride notice 
   Route::post('create-ride-notice','create_ride_notice');

});


//passenger API

Route::prefix('carpooling/passengers')->middleware(IsAuthenticated::class)->controller(PassengerController::class)->group(function () {
    Route::post('view-carpool-rides','view_carpool_rides');
    //starting ride 
    Route::get('start-ride/{booking_id}','start_ride'); 
    //cancel ride  
    Route::get('passenger-cancel-ride-booking/{booking_id}','passenger_cancel_ride_booking'); 
    //complete ride 
    Route::get('passenger-complete-ride/{booking_id}','passenger_complete_ride'); 
    //view booking histories 
    Route::get('view-booking-history/{user_id}','view_booking_history'); 
    

});


