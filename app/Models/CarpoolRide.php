<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarpoolRide extends Model
{
    protected $table = 'carpool_rides';

    protected $fillable = [
        'driver_vehicle_id',
        'origin_name',
        'destination_name',
        'departure_time',
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
}
