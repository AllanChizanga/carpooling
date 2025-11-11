<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Driver extends Model
{ 
    use HasUuids, SoftDeletes;
    
    protected $table = 'drivers';

    protected $fillable = [
        'user_id',
        'license_url',
        'proof_of_residence_url',
        'police_clearance_letter_url',
        'number_of_completed_rides',
        'is_activated',
        'badge',
    ];
public $timestamps = true;

}//endof class model 
