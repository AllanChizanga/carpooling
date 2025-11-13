<?php

namespace App\Services;

use Exception;
use App\Models\RideNotice;

class RideNoticeService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }//endof construct 

    public function createRideNotice(array $validated)
    {
        // You may want to validate here as a fallback, but presumes already validated

        try {
            // Create the ride notice
            $rideNotice = RideNotice::create([
                'ride_id'     => $validated['ride_id'],
                'message'     => $validated['message'],
                'notice_type' => $validated['notice_type'],
            ]);

            return [
                'success' => true,
                'message' => 'Ride notice created successfully.',
                'data'    => $rideNotice,
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => 'Failed to create ride notice: ' . $e->getMessage(),
            ];
        }
    }//endof function
}//endof class
