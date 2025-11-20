<?php

namespace Database\Seeders;

use App\Models\Ride;
use App\Models\User;
use App\Models\RideType;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\RideSeeder;
use Database\Seeders\RideTypeSeed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RideTypeSeed::class); //seeding ride types
        $this->call(RideSeeder::class); // seeding rides


    }
}
