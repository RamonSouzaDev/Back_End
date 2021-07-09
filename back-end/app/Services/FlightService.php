<?php
namespace App\Services;


class FlightService
{
    private $apiAddress;

    function __construct($apiAddress)
    {
        $this->apiAddress = $apiAddress;
    }

    public function getFlights($id = "")
    {
        $route = '/api/flights/'.$id;
        $curlUrl = curl_init($this->apiAddress.$route);

        curl_setopt_array(
            $curlUrl,
            [
                CURLOPT_RETURNTRANSFER => true,
            ]
        );

        $apiResponse = curl_exec($curlUrl);

        return $apiResponse;
    }

}




?>