<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class DriverVehicle extends Model
{
    use HasUuids;
    protected $table = 'driver_vehicles';

    protected $fillable = [
        'driver_id',
        'vehicle_id',
        'status',
    ];

    public $timestamps = true;
}
