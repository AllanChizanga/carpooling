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
    DriverVehicle::factory()->count(10)->create();
    }
}
