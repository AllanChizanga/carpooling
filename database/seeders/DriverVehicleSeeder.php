<?php

namespace Database\Seeders;

use App\Models\DriverVehicle;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DriverVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    $driverVehicles = [
        [
            'driver_id' => 1,
            'vehicle_id' => 1,
            'status' => 'active',
        ],
        [
            'driver_id' => 2,
            'vehicle_id' => 2,
            'status' => 'inactive',
        ],
        [
            'driver_id' => 3,
            'vehicle_id' => 3,
            'status' => 'active',
        ],
        [
            'driver_id' => 4,
            'vehicle_id' => 4,
            'status' => 'active',
        ],
        [
            'driver_id' => 5,
            'vehicle_id' => 5,
            'status' => 'active',
        ],
        [
            'driver_id' => 6,
            'vehicle_id' => 6,
            'status' => 'inactive',
        ],
        [
            'driver_id' => 7,
            'vehicle_id' => 7,
            'status' => 'active',
        ],
        [
            'driver_id' => 8,
            'vehicle_id' => 8,
            'status' => 'active',
        ],
        [
            'driver_id' => 9,
            'vehicle_id' => 9,
            'status' => 'active',
        ],
        [
            'driver_id' => 10,
            'vehicle_id' => 10,
            'status' => 'inactive',
        ],
    ];

    foreach ($driverVehicles as $driverVehicle) {
        DriverVehicle::create($driverVehicle);
    }

    }
}
