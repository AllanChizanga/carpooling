<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class CarpoolPassengerSetting extends Model
{
    use SoftDeletes,HasUuids;

    protected $fillable = [
        'user_id',
        'home_location',
        'work_location',
        'residential_address',
        'morning_pickup_time',
        'afternoon_pickup_time',
        'evening_pickup_time',
        'res_address_latitude',
        'res_address_longitude',
        'preferred_home_pickup_point_name',
        'home_pickup_point_latitude',
        'home_pickup_point_longitude',
        'home_pickup_point_description',
        'allow_home_pickup',
        'driver_gender_preference',
        'pickup_radius',
    ];
    
}//endof class
