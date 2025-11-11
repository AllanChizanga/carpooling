<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\DriverVehicle;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateDriverRideTest extends TestCase
{
   
/** @test */
public function test_create_driver_ride_returns_status_code_200()
{
    // Prepare driver vehicle (assume factory exists)
    $driverVehicle = new DriverVehicle([
        'driver_id' => 1, // use a valid existing driver id for test purposes
        'vehicle_id' => 101, // assuming vehicle_id is required and 101 is a dummy id
        'status' => 'active',
    ]);
    $driverVehicle->save();

    // Valid ride data based on CarpoolRide fillable fields
    $rideData = [
        'driver_vehicle_id' => $driverVehicle->id,
        'origin_name' => 'Central Park',
        'destination_name' => 'Times Square',
        'departure_time' => '10:00',
        'date_of_departure' => date('Y-m-d', strtotime('+1 day')),
        'available_seats' => 3,
        'origin_coordinations' => '40.785091,-73.968285',
        'description' => 'Morning ride',
        'status' => 'active',
        'contribution_per_seat' => 10,
        'total_bookings' => 0,
        'origin_lat' => 40.785091,
        'origin_long' => -73.968285,
        'destination_lat' => 40.758896,
        'destination_long' => -73.985130,
    ];

    $response = $this->withHeaders([
        'Accept' => 'application/json',
        'Content-Type' => 'application/json'
    ])->postJson('/api/carpooling/drivers/create-driver-ride', $rideData);

    $response->assertStatus(200);
}

}
