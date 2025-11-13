<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class BookingPickupPoint extends Model
{ 
    use HasUuids,SoftDeletes;
    protected $table = 'booking_pickup_points';

    protected $fillable = [
        'id',
        'ride_booking_id',
        'name',
        'latitude',
        'longitude',
    ];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
    ];
}
