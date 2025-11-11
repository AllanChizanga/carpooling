<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarpoolRidePickupPoint extends Model
{
    protected $table = 'carpool_ride_pickup_points';

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'carpool_ride_id',
        'pickup_point_name',
        'pickup_point_lat',
        'pickup_point_long',
    ];

    public $timestamps = true;

    /**
     * A pickup point belongs to a CarpoolRide.
     */
    public function carpoolRide()
    {
        return $this->belongsTo(CarpoolRide::class, 'carpool_ride_id');
    }

}//class 
