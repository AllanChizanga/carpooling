<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RideNotice extends Model
{
    use HasUuids,SoftDeletes;

    protected $table = 'ride_notices';

    protected $fillable = [
        'ride_id',
        'message',
        'notice_type',
    ];

    public function ride()
    {
        return $this->belongsTo(Ride::class, 'ride_id');
    }
}
