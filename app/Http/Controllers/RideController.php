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

    /**
     * RideController constructor.
     * 
     * @param RideService $rideService
     * @param RideNoticeService $noticeService
     */
    public function __construct(RideService $rideService, RideNoticeService $noticeService)
    {
        $this->rideService = $rideService;
        $this->noticeService = $noticeService;
    }

    /**
     * Cancel a ride.
     *
     * Cancels an existing ride by its ID.
     *
     * @phpdoc
     * @route POST /ride/{ride_id}/cancel
     * @urlParam ride_id int required The ID of the ride to cancel.
     * @response 200 {
     *   "success": true,
     *   "message": "Ride cancelled successfully."
     * }
     * @response 400 {
     *   "success": false,
     *   "message": "Unable to cancel ride."
     * }
     */
    public function cancel_ride($ride_id)
    {
        $result = $this->rideService->cancel_ride($ride_id);
        return response()->json($result, $result['success'] ? 200 : 400);
    }

    /**
     * Create a new ride from an existing ride.
     *
     * Creates a new ride entity based on data from an existing ride.
     *
     * @phpdoc
     * @route POST /ride/{ride_id}/clone
     * @urlParam ride_id int required The ID of the ride to clone.
     * @response 200 {
     *   "success": true,
     *   "message": "Ride created from existing ride.",
     *   "data": { "id": 123, ... }
     * }
     * @response 400 {
     *   "success": false,
     *   "message": "Unable to create ride from existing ride."
     * }
     */
    public function create_from_ride($ride_id)
    {
        $result = $this->rideService->create_from_ride($ride_id);
        return response()->json($result, $result['success'] ? 200 : 400);
    }

    /**
     * Open a ride.
     *
     * Changes the status of a ride to open.
     *
     * @phpdoc
     * @route POST /ride/{ride_id}/open
     * @urlParam ride_id int required The ID of the ride to open.
     * @response 200 {
     *   "success": true,
     *   "message": "Ride opened successfully."
     * }
     * @response 400 {
     *   "success": false,
     *   "message": "Unable to open ride."
     * }
     */
    public function open_ride($ride_id)
    {
        $result = $this->rideService->open_ride($ride_id);
        return response()->json($result, $result['success'] ? 200 : 400);
    }

    /**
     * Start a ride.
     *
     * Marks the ride as started.
     *
     * @phpdoc
     * @route POST /ride/{ride_id}/start
     * @urlParam ride_id int required The ID of the ride to start.
     * @response 200 {
     *   "success": true,
     *   "message": "Ride started successfully."
     * }
     * @response 400 {
     *   "success": false,
     *   "message": "Unable to start ride."
     * }
     */
    public function start_ride($ride_id)
    {
        $result = $this->rideService->start_ride($ride_id);
        return response()->json($result, $result['success'] ? 200 : 400);
    }

    /**
     * End a ride.
     *
     * Marks the ride as completed/ended.
     *
     * @phpdoc
     * @route POST /ride/{ride_id}/end
     * @urlParam ride_id int required The ID of the ride to end.
     * @response 200 {
     *   "success": true,
     *   "message": "Ride ended successfully."
     * }
     * @response 400 {
     *   "success": false,
     *   "message": "Unable to end ride."
     * }
     */
    public function end_ride($ride_id)
    {
        $result = $this->rideService->end_ride($ride_id);
        return response()->json($result, $result['success'] ? 200 : 400);
    }
    
    /**
     * View ride histories.
     *
     * Shows all ride histories for a specific driver vehicle.
     *
     * @phpdoc
     * @route GET /ride/histories/{driver_vehicle_id}
     * @urlParam driver_vehicle_id int required The ID of the driver's vehicle.
     * @response 200 {
     *   "success": true,
     *   "data": [{}, ...],
     *   "message": "Histories retrieved."
     * }
     * @response 400 {
     *   "success": false,
     *   "message": "Unable to retrieve ride histories."
     * }
     */
    public function view_ride_histories($driver_vehicle_id)
    {
        $result = $this->rideService->view_ride_histories($driver_vehicle_id);
        return response()->json($result, $result['success'] ? 200 : 400);
    }

    /**
     * Create a ride notice.
     *
     * Creates a notice related to a ride.
     *
     * @phpdoc
     * @route POST /ride/notice
     * @bodyParam ride_id int required The ID of the ride.
     * @bodyParam title string required The title of the notice.
     * @bodyParam content string required The content of the notice.
     * @response 200 {
     *   "success": true,
     *   "message": "Ride notice created successfully.",
     *   "data": { "id": 1, ... }
     * }
     * @response 400 {
     *   "success": false,
     *   "message": "Unable to create ride notice."
     * }
     */
    public function create_ride_notice(RideNoticeRequest $request)
    {
        $validated = $request->validated();
        $result = $this->noticeService->createRideNotice($validated);
        return response()->json($result, ($result['success'] ?? false) ? 200 : 400);
    }
    
}
