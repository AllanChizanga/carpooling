<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DriverService;
use App\Services\CarpoolRideService;
use App\Http\Requests\NewrideRequest;

class DriverController extends Controller
{    

    private $driverService;
    private $rideService;
    
    public function __construct(DriverService $driverService,CarpoolRideService $rideService)
    {
        
        $this->driverService = $driverService;
        $this->rideService = $rideService;
    }//endof construct 

  
    public function create_driver_ride(NewrideRequest $request)
    {  
       //validate
        $new_ride_data = $request->validated(); 

        //call carpoolride service 
       $res =  $this->rideService->create_new_ride($new_ride_data); 

        //response  

        if($res)
        { 
            return response()->json(['data'=>[],'message'=>'New Ride Created Successfully'],200);
        }
        else{
            return response()->json(['data'=>[],'message'=>'Failed To Created Ride'],422);
        }

    

    } //endof function
    
}//class
