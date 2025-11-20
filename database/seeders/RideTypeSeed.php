<?php

namespace Database\Seeders;

use App\Models\RideType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RideTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    RideType::updateOrCreate(
        ['name' => 'Morning Ride'],
        [
            'description' => 'Rides available during the morning period.',
            'is_active'   => true,
            'starttime'   => '00:00:00',
            'endtime'     => '11:59:59',
        ]
    );

    RideType::updateOrCreate(
        ['name' => 'Afternoon Ride'],
        [
            'description' => 'Rides available during the afternoon period.',
            'is_active'   => true,
            'starttime'   => '12:00:00',
            'endtime'     => '17:59:59',
        ]
    );

    RideType::updateOrCreate(
        ['name' => 'Evening Ride'],
        [
            'description' => 'Rides available during the evening period.',
            'is_active'   => true,
            'starttime'   => '18:00:00',
            'endtime'     => '23:59:59',
        ]
    );
    }
}
