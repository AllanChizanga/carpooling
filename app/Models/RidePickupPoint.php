<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class RidePickupPoint extends Model
{ 
    use HasUuids, SoftDeletes;
    protected $table = 'ride_pickup_points';


    protected $fillable = [
        'ride_id',
        'name',
        'latitude',
        'longitude',
    ];

    public $timestamps = true;

   
    public function ride()
    {
        return $this->belongsTo(Ride::class, 'ride_id');
    }
}
