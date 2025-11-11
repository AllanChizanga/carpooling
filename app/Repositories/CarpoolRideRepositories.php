<?php

namespace App\Repositories;

use App\Models\CarpoolRide;

class CarpoolRideRepositories
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    //create 

    public function create($data)
    { 
    // Use the CarpoolRide model to create and save a new carpool ride with the given $data
    // Assumption: $data is a valid associative array of input attributes
    return CarpoolRide::create($data);
    
    }

    //read

    //update

    //delete 


}
