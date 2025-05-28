<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\AirlineRepositoryInterface;
use App\Interfaces\FlightRepositoryInterface;

class FlightController extends Controller
{
    private AirlineRepositoryInterface $airlineRepository;
    private FlightRepositoryInterface $flightRepository;

    public function __construct(AirlineRepositoryInterface $airlineRepository, FlightRepositoryInterface $flightRepository)
    {
        $this->airlineRepository = $airlineRepository;

        $this->flightRepositoryy = $flightRepository;
    }
    function index(Request $request)
    {
        $airlines = $this->airlineRepository->getAllAirlines();

        $flights = $this->flightRepository->getAllFlights([

        ]);

        return view('pages.flight.index', compact('airlines'));
        
    }
}
