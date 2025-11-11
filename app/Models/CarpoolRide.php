<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class CarpoolRide extends Model
{ 
    use HasUuids;
    protected $table = 'carpool_rides';

    protected $fillable = [
        'driver_vehicle_id',
        'origin_name',
        'destination_name',
        'departure_time',
        'date_of_departure',
        'available_seats',
        'origin_coordinations',
        'description',
        'status',
        'contribution_per_seat',
        'total_bookings',
        'origin_lat',
        'origin_long',
        'destination_lat',
        'destination_long',
    ];

    public $timestamps = true;
    /**
     * A carpool ride has many pickup points.
     */
    public function pickupPoints()
    {
        return $this->hasMany(CarpoolRidePickupPoint::class, 'carpool_ride_id');
    }
}
