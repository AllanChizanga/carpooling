<?php

namespace App\Actions;

use App\Models\CarpoolRide;

class CheckDriverRideLimit
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function execute($driver_vehicle_id)
    {
        // Check the number of rides the driver created today
        $driver_carpool_rides = CarpoolRide::where('driver_vehicle_id', $driver_vehicle_id)
            ->whereDate('created_at', now()->toDateString())
            ->count();
        //if rides are 3 and above driver cannot create another ride 
    if ($driver_carpool_rides >= 3) {
            return false;
        }
        return true;
    }
}
