<?php

namespace App\Services;

use App\Models\DriverVehicle;
use App\Actions\CheckDriverRideLimit;
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
}
