<?php

namespace App\Repositories;

use App\Interfaces\AirlineRepositoryInterface;
use App\Models\Airline;

class AirlineRepository implements AirlineRepositoryInterface
{
    public function gettAllAirlines()
    {
        return Airline::all();
    }
}
