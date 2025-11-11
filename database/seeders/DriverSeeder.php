<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $drivers = [
        [
            'user_id' => 1,
            'license_url' => 'licenses/license_1.png',
            'proof_of_residence_url' => 'residence/residence_1.png',
            'police_clearance_letter_url' => 'police/police_1.png',
            'number_of_completed_rides' => 57,
            'is_activated' => true,
            'badge' => 'red',
        ],
        [
            'user_id' => 2,
            'license_url' => 'licenses/license_2.png',
            'proof_of_residence_url' => 'residence/residence_2.png',
            'police_clearance_letter_url' => 'police/police_2.png',
            'number_of_completed_rides' => 24,
            'is_activated' => true,
            'badge' => 'green',
        ],
        [
            'user_id' => 3,
            'license_url' => 'licenses/license_3.png',
            'proof_of_residence_url' => 'residence/residence_3.png',
            'police_clearance_letter_url' => 'police/police_3.png',
            'number_of_completed_rides' => 12,
            'is_activated' => false,
            'badge' => 'red',
        ],
        [
            'user_id' => 4,
            'license_url' => 'licenses/license_4.png',
            'proof_of_residence_url' => 'residence/residence_4.png',
            'police_clearance_letter_url' => 'police/police_4.png',
            'number_of_completed_rides' => 89,
            'is_activated' => true,
            'badge' => 'green',
        ],
        [
            'user_id' => 5,
            'license_url' => 'licenses/license_5.png',
            'proof_of_residence_url' => 'residence/residence_5.png',
            'police_clearance_letter_url' => 'police/police_5.png',
            'number_of_completed_rides' => 0,
            'is_activated' => false,
            'badge' => 'red',
        ],
        [
            'user_id' => 6,
            'license_url' => 'licenses/license_6.png',
            'proof_of_residence_url' => 'residence/residence_6.png',
            'police_clearance_letter_url' => 'police/police_6.png',
            'number_of_completed_rides' => 32,
            'is_activated' => true,
            'badge' => 'green',
        ],
        [
            'user_id' => 7,
            'license_url' => 'licenses/license_7.png',
            'proof_of_residence_url' => 'residence/residence_7.png',
            'police_clearance_letter_url' => 'police/police_7.png',
            'number_of_completed_rides' => 17,
            'is_activated' => false,
            'badge' => 'red',
        ],
        [
            'user_id' => 8,
            'license_url' => 'licenses/license_8.png',
            'proof_of_residence_url' => 'residence/residence_8.png',
            'police_clearance_letter_url' => 'police/police_8.png',
            'number_of_completed_rides' => 40,
            'is_activated' => true,
            'badge' => 'green',
        ],
        [
            'user_id' => 9,
            'license_url' => 'licenses/license_9.png',
            'proof_of_residence_url' => 'residence/residence_9.png',
            'police_clearance_letter_url' => 'police/police_9.png',
            'number_of_completed_rides' => 9,
            'is_activated' => false,
            'badge' => 'red',
        ],
        [
            'user_id' => 10,
            'license_url' => 'licenses/license_10.png',
            'proof_of_residence_url' => 'residence/residence_10.png',
            'police_clearance_letter_url' => 'police/police_10.png',
            'number_of_completed_rides' => 101,
            'is_activated' => true,
            'badge' => 'green',
        ],
    ];

    foreach ($drivers as $driver) {
        Driver::create($driver);
    }
    }
}
