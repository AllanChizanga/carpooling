<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ride extends Model
{ 
    use HasUuids,SoftDeletes;
    protected $table = 'rides';

    protected $fillable = [
        'driver_vehicle_id',
        'origin_name',
        'destination_name',
        'departure_time',
        'date_of_departure',
        'available_seats',
        'status', //
        'contribution_per_seat',
        'total_bookings',
        'origin_lat',
        'origin_long',
        'destination_lat',
        'destination_long',
    ];

    public $timestamps = true; 

    //bookings 
    public function bookings()
    {
        return $this->hasMany(RideBooking::class, 'ride_id');
    }

    //pickup points
   
    public function pickup_points()
    {
        return $this->hasMany(RidePickupPoint::class, 'ride_id');
    } 

    //ride notices
    public function ride_notices()
    {
        return $this->hasMany(RideNotice::class, 'ride_id');
    }
    
}//endof model class
