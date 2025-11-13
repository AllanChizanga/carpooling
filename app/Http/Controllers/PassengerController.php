<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CarpoolRideService;
use App\Services\RideBookingService;
use App\Http\Requests\ViewCarpoolRidesRequest;

class PassengerController extends Controller
{  

    private $rideService;
    private $bookingService;

    public function __construct(CarpoolRideService $rideService,RideBookingService $bookingService)
    { 

        $this->rideService = $rideService;
        $this->bookingService = $bookingService;

    }//endof construct 

    public function view_carpool_rides(ViewCarpoolRidesRequest $request)
    {
       $data =  $request->validated();

        // call service 
        $rides = $this->rideService->view_carpool_rides($data);

        return response()->json(['data'=> $rides,
            'message' => 'Rides Listings'
        ], 200);
    }//endof function   


    public function start_ride($booking_id)
    {
       $result =  $this->bookingService->start_ride($booking_id); 

       return response()->json($result, $result['success'] ? 200 : 422);

    }//endof 
    public function passenger_cancel_ride_booking($booking_id)
    {
        $result = $this->bookingService->passenger_cancel_ride_booking($booking_id);

        return response()->json($result, $result['success'] ? 200 : 422);
    }//endof function 

public function passenger_complete_ride($booking_id)
{
    $result = $this->bookingService->passenger_complete_ride($booking_id);

    return response()->json($result, $result['success'] ? 200 : 422);
}//endof  function 

public function view_booking_history($user_id)
{
    $booking  = $this->bookingService->view_booking_history($user_id);

    return response()->json([
        'success' => true,
        'message' => 'Booking history retrieved successfully',
        'data' => [
            'booking' => $booking
        ]
    ], 200);
}


}//endof class
