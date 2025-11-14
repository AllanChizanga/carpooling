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

    /**
     * PassengerController constructor.
     *
     * @param CarpoolRideService $rideService
     * @param RideBookingService $bookingService
     */
    public function __construct(CarpoolRideService $rideService, RideBookingService $bookingService)
    { 
        $this->rideService = $rideService;
        $this->bookingService = $bookingService;
    }

    /**
     * View available carpool rides.
     *
     * Returns a list of available carpool rides based on the search criteria.
     *
     * @phpdoc
     * @route POST /passenger/rides
     * @bodyParam origin_name string required The name of the origin location.
     * @bodyParam destination_name string required The name of the destination location.
     * @bodyParam origin_lat float Latitude of origin.
     * @bodyParam origin_long float Longitude of origin.
     * @bodyParam destination_lat float Latitude of destination.
     * @bodyParam destination_long float Longitude of destination.
     * @response 200 {
     *      "data": [
     *          {
     *              "id": 1,
     *              "origin_name": "Origin",
     *              "destination_name": "Destination",
     *              ...
     *          }
     *      ],
     *      "message": "Rides Listings"
     * }
     */
    public function view_carpool_rides(ViewCarpoolRidesRequest $request)
    {
        $data = $request->validated();

        // call service 
        $rides = $this->rideService->view_carpool_rides($data);

        return response()->json([
            'data' => $rides,
            'message' => 'Rides Listings'
        ], 200);
    }

    /**
     * Start a ride as a passenger.
     *
     * Marks the ride booking as started for a passenger.
     *
     * @phpdoc
     * @route POST /passenger/booking/{booking_id}/start
     * @urlParam booking_id int required The booking ID.
     * @response 200 {
     *      "success": true,
     *      "message": "Ride started."
     * }
     * @response 422 {
     *      "success": false,
     *      "message": "Unable to start ride."
     * }
     */
    public function start_ride($booking_id)
    {
        $result =  $this->bookingService->start_ride($booking_id); 
        return response()->json($result, $result['success'] ? 200 : 422);
    }

    /**
     * Cancel a ride booking as a passenger.
     *
     * Allows the passenger to cancel a ride booking.
     *
     * @phpdoc
     * @route POST /passenger/booking/{booking_id}/cancel
     * @urlParam booking_id int required The booking ID.
     * @response 200 {
     *      "success": true,
     *      "message": "Booking cancelled."
     * }
     * @response 422 {
     *      "success": false,
     *      "message": "Unable to cancel booking."
     * }
     */
    public function passenger_cancel_ride_booking($booking_id)
    {
        $result = $this->bookingService->passenger_cancel_ride_booking($booking_id);
        return response()->json($result, $result['success'] ? 200 : 422);
    }

    /**
     * Complete a ride as a passenger.
     *
     * Marks the ride booking as completed for a passenger.
     *
     * @phpdoc
     * @route POST /passenger/booking/{booking_id}/complete
     * @urlParam booking_id int required The booking ID.
     * @response 200 {
     *      "success": true,
     *      "message": "Ride completed."
     * }
     * @response 422 {
     *      "success": false,
     *      "message": "Unable to complete ride."
     * }
     */
    public function passenger_complete_ride($booking_id)
    {
        $result = $this->bookingService->passenger_complete_ride($booking_id);
        return response()->json($result, $result['success'] ? 200 : 422);
    }

    /**
     * View booking history for a passenger.
     *
     * Returns the booking history for the specified passenger/user.
     *
     * @phpdoc
     * @route GET /passenger/{user_id}/bookings/history
     * @urlParam user_id int required The user ID.
     * @response 200 {
     *      "success": true,
     *      "message": "Booking history retrieved successfully",
     *      "data": {
     *          "booking": [...]
     *      }
     * }
     */
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

}
