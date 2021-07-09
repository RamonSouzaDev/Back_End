<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FlightService;
use App\Models\Resources\FlightGrouping;
use App\Models\Resources\GroupOfFlight;

class GroupingOfFlightController extends Controller
{
    function index()
    {
        $address = env('MILHAS_API_ADDRESS');
  
        $milhasApi = new FlightService($address);

        $flights = json_decode($milhasApi->getFlights());

        return response()->json($flights);
    }

    function groups()
    {
        $address = env('MILHAS_API_ADDRESS');

        $milhasApi = new FlightService($address);

        $flights = json_decode($milhasApi->getFlights());

        $flightGrouping = new GroupOfFlight();

        try
        {
            $result = $flightGrouping->makeGroups($flights);
            $status = 200;
        }catch (\Exception $e)
        {
            $result = ['result' => 'error', 'message' => 'Failed to group flights', 'status_code' => '500'];
            $status = 500;
        }

        return response($result, $status);
    }

}
