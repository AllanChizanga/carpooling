<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DriverService;
use App\Services\CarpoolRideService;
use App\Services\RideBookingService;
use App\Http\Requests\NewrideRequest;

class DriverController extends Controller
{    

    private $driverService;
    private $rideService;
    private $bookingService;
    
    public function __construct(
        DriverService $driverService,
        CarpoolRideService $rideService,
        RideBookingService $bookingService
        )

    {
        
        $this->driverService = $driverService;
        $this->rideService = $rideService;
        $this->bookingService = $bookingService;
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

    public function ride_bookings($ride_id)
    { 
        //open service
        $res  =  $this->bookingService->get_ride_bookings($ride_id); 
        //response  

        if($res->success)
        {
            return response()->json([
                'success' => true,
                'message' => $res['message'],
                'data' => $res['data']
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => $res['message'] ?? 'Failed to retrieve ride bookings',
                'data' => $res['data'] ?? []
            ], 404);
        }
  
    }//endof function 

    public function accept_ride_booking($ride_booking_id)
    { 

        //service
        $res = $this->bookingService->accept_ride_booking($ride_booking_id);

        if ($res['success']) {
            return response()->json([
                'success' => true,
                'message' => $res['message'],
                'data' => $res['data']
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => $res['message'] ?? 'Failed to accept ride booking',
                'data' => $res['data'] ?? []
            ], 422);
        }

    }//endof function 

    public function cancel_ride_booking($ride_booking_id)
    {
    // Call the booking service to cancel the ride booking
    $res = $this->bookingService->cancel_ride_booking($ride_booking_id);

    if ($res['success']) {
        return response()->json([
            'success' => true,
            'message' => $res['message'],
            'data' => $res['data']
        ], 200);
    } else {
        return response()->json([
            'success' => false,
            'message' => $res['message'] ?? 'Failed to cancel ride booking',
            'data' => $res['data'] ?? []
        ], 422);
    }
    }//endof function 
    
    
}//class
