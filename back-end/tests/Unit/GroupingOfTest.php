<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\FlightService;
use App\Models\Resources\GroupOfFlight;


class GroupingOfTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFlightsApiCommunication()
    {
        $address = env('MILHAS_API_ADDRESS');

        $milhasApi = new FlightService($address);

        $flights = json_decode($milhasApi->getFlights());
        
        $this->assertTrue(gettype($flights) == "array");
    }

    public function testGrouping()
    {
        $address = env('MILHAS_API_ADDRESS');

        $milhasApi = new FlightService($address);

        $flights = json_decode($milhasApi->getFlights());

        $flightGrouping = new GroupOfFlight();

        $result = $flightGrouping->makeGroups($flights);

        $this->assertTrue(gettype($result) == "object");
    }
}
