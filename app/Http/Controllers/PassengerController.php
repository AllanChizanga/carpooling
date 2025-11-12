<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CarpoolRideService;
use App\Http\Requests\ViewCarpoolRidesRequest;

class PassengerController extends Controller
{  

    private $rideService;

    public function __construct(CarpoolRideService $rideService)
    { 

        $this->rideService = $rideService;

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

}//endof class
