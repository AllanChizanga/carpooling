<?php

namespace App\Services;

use App\Models\CarpoolRide;
use App\Models\DriverVehicle;
use App\Actions\CheckDriverRideLimit;
use App\Models\CarpoolRidePickupPoint;
use App\Repositories\CarpoolRideRepositories;
use App\Actions\CheckCanDriverCreateRideAction;

class CarpoolRideService
{
   
    private $createRideAction;
    private $driver_vehicle;
    private $rideRepository;

    public function __construct(CheckCanDriverCreateRideAction $createRideAction,
     CheckDriverRideLimit $driverRideLimit,CarpoolRideRepositories $rideRepository)
    {
        $this->createRideAction = $createRideAction;
        $this->driverRideLimit = $driverRideLimit;
        $this->rideRepository = $rideRepository;
    }  //endof construct

    public function create_new_ride($data)
    {
        //fetch the driver 
        $driver_vehicle = DriverVehicle::where('id',$data['driver_vehicle_id'])->first();
        $driver_id = $driver_vehicle->driver_id;
        //check if driver is liable to create ride 
        $res = $this->createRideAction->execute($driver_id);
        //if true 
        if($res)
        {

        }
        //driver cannot create ride;
        else{
            return false;
        }
        //check driver rides has not exceeded limit of the day 
        $res = $this->driverRideLimit->execute($driver_id);
        if($res)
        {
               //save new ride  
               $this->rideRepository->create($data);
        }
        else{
        return false;
        }
    }//endof fucntion 

    //function to view carpool rides 

    public function view_carpool_rides($data)
    { 

        // Fetch carpool rides that match origin and destination names,
        // or whose origin coordinates are within 5km range from that specified by user,
        // or whose pickup points (from carpool_ride_pickup_points table) match those specified by passenger.

        $originName = $data['origin_name'] ?? null;
        $destinationName = $data['destination_name'] ?? null;
        $originLat = $data['origin_lat'] ?? null;
        $originLong = $data['origin_long'] ?? null;
        $destinationLat = $data['destination_lat'] ?? null;
        $destinationLong = $data['destination_long'] ?? null;

        // Start query builder for CarpoolRide
        $query = CarpoolRide::query();

        // 1. Match by origin and destination name (always required by validation)
        $query->where(function ($q) use ($originName, $destinationName) {
            $q->where('origin_name', 'LIKE', '%' . $originName . '%')
              ->where('destination_name', 'LIKE', '%' . $destinationName . '%');
        });

        // 2. If both coordinates are provided, add a proximity match for origin (within ~5km)
        if ($originLat !== null && $originLong !== null) {
            // Using Haversine formula for 5km radius
            $haversine = "(6371 * acos(cos(radians($originLat)) * cos(radians(origin_lat)) * cos(radians(origin_long) - radians($originLong)) + sin(radians($originLat)) * sin(radians(origin_lat))))";
            $query->orWhereRaw("$haversine <= 5");
        }

        // Check if any CarpoolRidePickupPoint matches the origin name or is within 5km of the origin coordinates.
        // If so, retrieve the associated carpool ride(s) and include those in the results.

        $pickupPointMatchedRideIds = [];

        // Match pickup point name with origin name
        if (!empty($originName)) {
            $pickupPointMatchedRideIds = CarpoolRidePickupPoint::where('pickup_point_name', 'LIKE', '%' . $originName . '%')
                ->pluck('carpool_ride_id')
                ->toArray();
        }

        // If coordinates provided, also match pickup points within 5km
        if ($originLat !== null && $originLong !== null) {
            $pickupPointsNearby = CarpoolRidePickupPoint::select('carpool_ride_id')
                ->selectRaw(
                    "(6371 * acos(
                        cos(radians(?)) * cos(radians(pickup_point_lat)) * cos(radians(pickup_point_long) - radians(?)) +
                        sin(radians(?)) * sin(radians(pickup_point_lat))
                    )) AS distance",
                    [$originLat, $originLong, $originLat]
                )
                ->having('distance', '<=', 5)
                ->pluck('carpool_ride_id')
                ->toArray();

            $pickupPointMatchedRideIds = array_unique(array_merge($pickupPointMatchedRideIds, $pickupPointsNearby));
        }

        // Add the matched carpool ride IDs (from pickup points) to the query
        if (!empty($pickupPointMatchedRideIds)) {
            $query->orWhereIn('id', $pickupPointMatchedRideIds);
        }

        // Fetch results
        $rides = $query->get();

        // Return rides with their pickup points
        return $rides->load('pickupPoints');
        

    }
}//endof class 
