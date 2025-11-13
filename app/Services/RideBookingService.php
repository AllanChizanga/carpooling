<?php

namespace App\Services;

use App\Models\Ride;
use App\Models\RideBooking;

class RideBookingService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
    
    }//endof constructor 
   
    //retrieving all bookings for this ride 
    public function get_ride_bookings($ride_id)
    { 

    // retrieve the ride with its bookings
    $ride = Ride::with(['bookings', 'pickup_points', 'notices'])->find($ride_id);

    if (!$ride) {

        return [
            'success' => false,
            'message' => 'Ride not found',
            'data' => []
        ];
    }

    return [
        'success' => true,
        'message' => 'Ride bookings retrieved successfully',
        'data' => [
            'ride' => $ride
        ]
    ];

    }//endof function

    //accept ride booking
    public function accept_ride_booking($ride_booking_id)
    {
    // retrieve the ride booking
    $booking = RideBooking::find($ride_booking_id);

    if (!$booking) {
        return [
            'success' => false,
            'message' => 'Ride booking not found',
            'data' => []
        ];
    }

    // Check if booking_status is 'pending'
    if ($booking->booking_status == 'pending') {
        $booking->booking_status = 'accepted';
        $booking->save();

        return [
            'success' => true,
            'message' => 'Ride booking accepted successfully',
            'data' => [
                'booking' => $booking
            ]
        ];
    } else {
        return [
            'success' => false,
            'message' => 'Only bookings with pending status can be accepted',
            'data' => [
                'booking' => $booking
            ]
        ];
    }
    }//endof function 

    public function cancel_ride_booking($ride_booking_id)
    {
    // retrieve the ride booking
    $booking = RideBooking::find($ride_booking_id);

    if (!$booking) {
        return [
            'success' => false,
            'message' => 'Ride booking not found',
            'data' => []
        ];
    }

    // Only cancel booking if booking_status is 'accepted'
    if ($booking->booking_status == 'accepted') {
        $booking->booking_status = 'cancelled';
        $booking->save();

        return [
            'success' => true,
            'message' => 'Ride booking cancelled successfully',
            'data' => [
                'booking' => $booking
            ]
        ];
    } else {
        return [
            'success' => false,
            'message' => 'Only bookings with accepted status can be cancelled',
            'data' => [
                'booking' => $booking
            ]
        ];
    }
    }
}//endof class
