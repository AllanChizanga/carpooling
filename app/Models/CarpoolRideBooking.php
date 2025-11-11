<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarpoolRideBooking extends Model
{
    protected $table = 'carpool_ride_bookings';

    protected $fillable = [
        'user_id',
        'carpool_ride_id',
        'contribution_paid',
        'currency',
        'payment_method',
        'payment_status',
        'booking_status',
    ];

    protected $casts = [
        'contribution_paid' => 'decimal:2',
        'payment_status' => 'string',
        'booking_status' => 'string',
    ];

    public $timestamps = true;
}
