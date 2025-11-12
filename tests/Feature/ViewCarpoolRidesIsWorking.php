<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\CarpoolRide;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewCarpoolRidesIsWorking extends TestCase
{ 


    /** @test */
    public function test_view_carpool_rides_returns_200_and_expected_structure()
    {
        // You may use RefreshDatabase trait if you want, for test isolation
        
        // Create a fake ride in the DB that matches search 

        $ride = CarpoolRide::factory()->create([
            'driver_vehicle_id' => 1,
            'origin_name' => 'Central Park',
            'destination_name' => 'Times Square',
            'departure_time' => now()->addHours(2),
            'date_of_departure' => now()->toDateString(),
            'available_seats' => 3,
            'origin_coordinations' => '{"lat":40.785091,"long":-73.968285}',
            'description' => 'Morning ride from park to square.',
            'status' => 'open',
            'contribution_per_seat' => 20,
            'total_bookings' => 0,
            'origin_lat' => 40.785091,
            'origin_long' => -73.968285,
            'destination_lat' => 40.758896,
            'destination_long' => -73.985130,
        ]);

        $payload = [
            'origin_name' => 'Central Park',
            'destination_name' => 'Times Square',
            'origin_lat' => 40.785091,
            'origin_long' => -73.968285,
            'destination_lat' => 40.758896,
            'destination_long' => -73.985130,
        ];

        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->postJson('/api/carpooling/passengers/view-carpool-rides', $payload);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data',
            'message',
        ]);
        $response->assertJson([
            'message' => 'Rides Listings'
        ]);

        // Check our created ride is in the response (by id or by origin/destination)
        $responseRides = $response->json('data');
        $this->assertNotEmpty($responseRides);
        $this->assertTrue(
            collect($responseRides)->contains(function ($r) use ($ride) {
                return 
                    isset($r['origin_name'], $r['destination_name']) &&
                    $r['origin_name'] === $ride->origin_name &&
                    $r['destination_name'] === $ride->destination_name;
            }),
            "Response does not contain the expected ride"
        );
    }

  
}//endof class
