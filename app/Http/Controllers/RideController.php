<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RideService;
use App\Services\RideNoticeService;
use App\Http\Requests\RideNoticeRequest;

class RideController extends Controller
{
    protected $rideService;
    protected $noticeService;

    public function __construct(RideService $rideService,RideNoticeService $noticeService)
    {
        $this->rideService = $rideService;
        $this->noticeService = $noticeService;
    }//endof construct 

    //cancel_ride 
    public function cancel_ride($ride_id)
    {  

        $result = $this->rideService->cancel_ride($ride_id);
        return response()->json($result, $result['success'] ? 200 : 400);


    }//endof function 

    public function create_from_ride($ride_id)
    {

        $result = $this->rideService->create_from_ride($ride_id);
        return response()->json($result, $result['success'] ? 200 : 400);
    }//endof function 

    //open_ride 
    public function open_ride($ride_id)
    {
        $result = $this->rideService->open_ride($ride_id);
        return response()->json($result, $result['success'] ? 200 : 400);
    }//endof function
    //start_ride 
    public function start_ride($ride_id)
    {
        $result = $this->rideService->start_ride($ride_id);
        return response()->json($result, $result['success'] ? 200 : 400);
    }//endof function 

    //end_ride 
    public function end_ride($ride_id)
    {
        $result = $this->rideService->end_ride($ride_id);
        return response()->json($result, $result['success'] ? 200 : 400);
    }//endof function 
    
    //view ride  
    public function view_ride_histories($driver_vehicle_id)
    {
        $result = $this->rideService->view_ride_histories($driver_vehicle_id);
        return response()->json($result, $result['success'] ? 200 : 400);
    }//endof function  

    public function create_ride_notice(RideNoticeRequest $request)
    {
        // Validate the request using RideNoticeRequest
        $validated = $request->validated();

        // If you have a NoticeService that handles creation, delegate:
        $result = $this->noticeService->createRideNotice($validated);

        return response()->json($result, ($result['success'] ?? false) ? 200 : 400);

    }
    
}//endof class
