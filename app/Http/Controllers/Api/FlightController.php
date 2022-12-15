<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FlightRequest;
use Illuminate\Support\Facades\Http;

class FlightController extends Controller
{
    public function searchForFlight(FlightRequest $request)
    {
        $response = Http::withOptions([
            'verify' => false,
        ])->post('https://biletbayisi.com/api/flight-ticket/get-flights', [
            "origin" => "IST",
            "destination" => "DNZ",
            "departure_date" => "2023-04-13",
            "return_date" => "2023-04-14",
            "passengers" => array(
                "ADT" => 3,
                "CHD" => 3,
                "INF" => 1
            )]);

        return response()->json($response->json());
    }
}
