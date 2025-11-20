<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingDropoffPoint extends Model
{
   use HasUuids,SoftDeletes;

    protected $fillable = [
        'id',
        'ride_booking_id',
        'name',
        'latitude',
        'longitude',
    ];

    /**
     * Get the ride booking that this dropoff point belongs to.
     */
    public function rideBooking()
    {
        return $this->belongsTo(RideBooking::class, 'ride_booking_id');
    }

 

}
