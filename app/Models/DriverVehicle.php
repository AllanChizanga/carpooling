<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverVehicle extends Model
{
    protected $table = 'driver_vehicles';

    protected $fillable = [
        'driver_id',
        'vehicle_id',
        'status',
    ];

    public $timestamps = true;
}
