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
        $this->rideService->create_new_ride($new_ride_data); 

        //response 

        return response()->json(['data',],200);
      



    } //endof function
    
}//class
