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

    /**
     * DriverController constructor.
     *
     * @param DriverService $driverService
     * @param CarpoolRideService $rideService
     * @param RideBookingService $bookingService
     */
    public function __construct(
        DriverService $driverService,
        CarpoolRideService $rideService,
        RideBookingService $bookingService
    ) {
        $this->driverService = $driverService;
        $this->rideService = $rideService;
        $this->bookingService = $bookingService;
    }

    /**
     * Create a new carpool ride as a driver.
     *
     * Creates a new ride with the given data.
     *
     * @phpdoc
     * @route POST /driver/ride
     * @bodyParam user_id int required The id of the user.
     * @bodyParam driver_vehicle_id int required The vehicle id.
     * @bodyParam origin_name string required The name of the origin location.
     * @bodyParam destination_name string required The name of the destination location.
     * @bodyParam departure_time string required The time of departure (H:i format).
     * @bodyParam date_of_departure string required The date of departure (Y-m-d).
     * @bodyParam available_seats int required The number of available seats.
     * @bodyParam status string required The ride status.
     * @bodyParam contribution_per_seat float required Contribution asked per seat.
     * @bodyParam total_bookings int The current bookings for ride.
     * @bodyParam origin_lat float required Latitude of origin.
     * @bodyParam origin_long float required Longitude of origin.
     * @bodyParam destination_lat float required Latitude of destination.
     * @bodyParam destination_long float required Longitude of destination.
     * @response 200 {
     *      "success": true,
     *      "message": "Ride created successfully.",
     *      "data": { "id": 1, ... }
     * }
     * @response 400 {
     *      "success": false,
     *      "message": "Validation failed.",
     *      "data": []
     * }
     */
    public function create_driver_ride(NewrideRequest $request)
    {  
        $new_ride_data = $request->validated(); 
        $result =  $this->rideService->create_new_ride($new_ride_data); 
        return response()->json($result, $result['success'] ? 200 : 400);
    }

    /**
     * Get bookings for a ride.
     *
     * Returns all bookings for a specific ride ID.
     *
     * @phpdoc
     * @route GET /driver/ride/{ride_id}/bookings
     * @urlParam ride_id int required The id of the ride.
     * @response 200 {
     *      "success": true,
     *      "message": "Bookings retrieved.",
     *      "data": [ { "id": 1, ... }, ... ]
     * }
     * @response 404 {
     *      "success": false,
     *      "message": "Failed to retrieve ride bookings",
     *      "data": []
     * }
     */
    public function ride_bookings($ride_id)
    { 
        $res  =  $this->bookingService->get_ride_bookings($ride_id); 
        if($res->success) {
            return response()->json([
                'success' => true,
                'message' => $res['message'],
                'data' => $res['data']
            ], 200);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => $res['message'] ?? 'Failed to retrieve ride bookings',
                'data' => $res['data'] ?? []
            ], 404);
        }
    }

    /**
     * Accept a ride booking request.
     *
     * Accepts a user's booking for a ride.
     *
     * @phpdoc
     * @route POST /driver/ride-booking/{ride_booking_id}/accept
     * @urlParam ride_booking_id int required The id of the ride booking.
     * @response 200 {
     *      "success": true,
     *      "message": "Booking accepted.",
     *      "data": { "id": 3, ... }
     * }
     * @response 422 {
     *      "success": false,
     *      "message": "Failed to accept ride booking",
     *      "data": []
     * }
     */
    public function accept_ride_booking($ride_booking_id)
    { 
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
    }

    /**
     * Cancel a ride booking.
     *
     * Cancels an existing ride booking.
     *
     * @phpdoc
     * @route POST /driver/ride-booking/{ride_booking_id}/cancel
     * @urlParam ride_booking_id int required The id of the ride booking.
     * @response 200 {
     *      "success": true,
     *      "message": "Booking cancelled.",
     *      "data": { "id": 3, ... }
     * }
     * @response 422 {
     *      "success": false,
     *      "message": "Failed to cancel ride booking",
     *      "data": []
     * }
     */
    public function cancel_ride_booking($ride_booking_id)
    {
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
    }

}
