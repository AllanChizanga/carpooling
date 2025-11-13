<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RideBooking extends Model
{ 
    use HasUuids, SoftDeletes;
    protected $table = 'ride_bookings';

    protected $fillable = [
        'user_id',
        'ride_id',
        'contribution_total_amount',
        'contribution_paid',
        'contribution_balance',
        'currency',
        'payment_method',
        'payment_status',
        'booking_status',//'active','inprogress', 'cancelled', 'completed','pending','accepted','rejected'
    ];

    public $timestamps = true;

    public function ride()
    {
        return $this->belongsTo(Ride::class, 'ride_id');
    }
}//class 
