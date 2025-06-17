<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\AirportRepositoryInterface;
use App\Interfaces\AirlineRepositoryInterface;
use App\Interfaces\FlightRepositoryInterface;

class FlightController extends Controller
{
    private AirportRepositoryInterface $airportRepository;
    private AirlineRepositoryInterface $airlineRepository;
    private FlightRepositoryInterface $flightRepository;

    public function __construct(AirlineRepositoryInterface $airlineRepository, FlightRepositoryInterface $flightRepository, AirportRepositoryInterface $airportRepository)
    {
        $this->airportRepository = $airportRepository;
        $this->airlineRepository = $airlineRepository;
        $this->flightRepository = $flightRepository;
    }
    function index(Request $request)
    {
        $departure = $this->airportRepository->getAirportByIataCode($request->departure);
        $arrival = $this->airportRepository->getAirportByIataCode($request->arrival);

        $airlines = $this->airlineRepository->getAllAirlines();

        $flights = $this->flightRepository->getAllFlights([
            'departure' => $departure->id ?? null,
            'arrival' => $arrival->id ?? null,
            'date' => $request->date ?? null,
        ]);

        return view('pages.flight.index', compact('flights', 'airlines'));

    }

    public function show($flightNumber)
    {
        $flight = $this->flightRepository->getFlightByFlightNumber($flightNumber);
        return view('pages.flight.show', compact('flight'));
    }
}
