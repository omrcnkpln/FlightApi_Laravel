<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FlightListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this["id"],
            "direction" =>$this["direction"],
            "departureDatetime" =>$this["departureDatetime"],
            "arrivalDatetime" =>$this["arrivalDatetime"],
            "departureAirport" =>$this["departureAirport"],
            "arrivalAirport" =>$this["arrivalAirport"],
            "viewPrice" =>$this["viewPrice"],
            "availableSeats" =>$this["availableSeats"],
//            "segments" => [
//                "airline" => "TK",
//                "flightNumber" => "TK2581",
//                "departureAirport" => "DNZ",
//                "arrivalAirport" => "IST",
//                "departureDatetime" => "2023-04-14T03:55:00",
//                "arrivalDatetime" => "2023-04-14T05:05:00",
//                "class" => "Q",
//                "availableSeats" => 9,
//                "duration" => [
//                    "day" => 0,
//                    "hours" => 1,
//                    "minutes" => 10
//                ]
//            ],
//            "viewBaggage" => [
//                "unit" => "KILO",
//                "quantity" => 15
//            ],
//            "baggageInfo" => [
//                "ADT" => [
//                    "unit" => "KILO",
//                    "quantity" => 15
//                ],
//                "CHD" => [
//                    "unit" => "KILO",
//                    "quantity" => 15
//                ],
//                "INF" => [
//                    "unit" => "KILO",
//                    "quantity" => 10
//                ]
//            ],
//            "duration" => [
//                "day" => 0,
//                "hours" => 1,
//                "minutes" => 10
//            ],
//            "fares" => [
//                "ADT" => [
//                    "baseFare" => 621.17,
//                    "tax" => 223.06,
//                    "serviceFee" => 6,
//                    "quantity" => 3
//                ],
//                "CHD" => [
//                    "baseFare" => 559.05,
//                    "tax" => 218.71,
//                    "serviceFee" => 6,
//                    "quantity" => 3
//                ],
//                "INF" => [
//                    "baseFare" => 99,
//                    "tax" => 0,
//                    "serviceFee" => 6,
//                    "quantity" => 1
//                ]
//            ],
        ];
    }
}
