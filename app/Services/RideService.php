<?php

namespace App\Services;

use App\Models\Ride;

class RideService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    } 

    public function cancel_ride($ride_id)
    {
    $ride = Ride::find($ride_id);

    if (!$ride) {
        return [
            'success' => false,
            'message' => 'Ride not found',
            'data' => []
        ];
    }

    if ($ride->status == 'open') {
        $ride->status = 'cancelled';
        $ride->save();

        return [
            'success' => true,
            'message' => 'Ride cancelled successfully',
            'data' => ['ride_id' => $ride->id, 'status' => $ride->status]
        ];
    } else {
        return [
            'success' => false,
            'message' => 'Ride cannot be cancelled. Only open rides can be cancelled.',
            'data' => ['ride_id' => $ride->id, 'status' => $ride->status]
        ];
    }
    }//endof function 

    public function create_from_ride($ride_id)
    {
    // Create a new ride from the given ride_id
    $ride = Ride::find($ride_id);

    if (!$ride) {
        return [
            'success' => false,
            'message' => 'Original ride not found',
            'data' => []
        ];
    }

    // Copy only the fillable attributes (except id, timestamps, and status, which should be default)
    $new_ride_data = $ride->only([
        'driver_vehicle_id',
        'origin_name',
        'destination_name',
        'departure_time',
        'date_of_departure',
        'available_seats',
        'contribution_per_seat',
        'origin_lat',
        'origin_long',
        'destination_lat',
        'destination_long'
    ]);

    $new_ride_data['status'] = 'draft';
    $new_ride_data['total_bookings'] = 0;

    $new_ride = Ride::create($new_ride_data);

    if ($new_ride) {
        return [
            'success' => true,
            'message' => 'New ride created from previous ride successfully',
            'data' => [
                'new_ride' => $new_ride
            ]
        ];
    } else {
        return [
            'success' => false,
            'message' => 'Failed to create ride from this ride',
            'data' => []
        ];
    }
    }//endof function

public function open_ride($ride_id)
{
    // Find the ride by ID
    $ride = Ride::find($ride_id);

    if (!$ride) {
        return [
            'success' => false,
            'message' => 'Ride not found',
            'data' => []
        ];
    }

    // Only allow opening if ride is in draft or closed state, for example
    if ($ride->status !== 'draft') {
        return [
            'success' => false,
            'message' => 'Ride cannot be opened from its current status',
            'data' => []
        ];
    }

    // Change the status to open (or 'published')
    $ride->status = 'open';
    $ride->save();

    return [
        'success' => true,
        'message' => 'Ride opened successfully',
        'data' => [
            'ride' => $ride
        ]
    ];
}//endof function 

public function start_ride($ride_id)
{
    // Find the ride by ID
    $ride = Ride::find($ride_id);

    if (!$ride) {
        return [
            'success' => false,
            'message' => 'Ride not found',
            'data' => []
        ];
    }

    // Only allow starting if ride is in 'open' state
    if ($ride->status !== 'open') {
        return [
            'success' => false,
            'message' => 'Ride cannot be started from its current status',
            'data' => []
        ];
    }

    $ride->status = 'inprogress';
    $ride->save();

    return [
        'success' => true,
        'message' => 'Ride started successfully',
        'data' => [
            'ride' => $ride
        ]
    ];
}//endof function 

public function end_ride($ride_id)
{
    // Find the ride by ID
    $ride = Ride::find($ride_id);

    if (!$ride) {
        return [
            'success' => false,
            'message' => 'Ride not found',
            'data' => []
        ];
    }

    // Only allow ending if ride is in 'inprogress' state
    if ($ride->status !== 'inprogress') {
        return [
            'success' => false,
            'message' => 'Ride cannot be ended from its current status',
            'data' => []
        ];
    }

    $ride->status = 'completed';
    $ride->save();

    return [
        'success' => true,
        'message' => 'Ride ended successfully',
        'data' => [
            'ride' => $ride
        ]
    ];
}//endof function 

public function view_ride_histories($driver_vehicle_id)
{
    // Fetch 10 latest rides for the given driver vehicle, including bookings and pickup points
    $rides = Ride::where('driver_vehicle_id', $driver_vehicle_id)
        ->orderBy('created_at', 'desc')
        ->with(['bookings', 'pickup_points'])
        ->take(10)
        ->get();

    return [
        'success' => true,
        'message' => 'Latest ride histories fetched successfully',
        'data' => [
            'rides' => $rides
        ]
    ];
}//endof function 





}//endof class
