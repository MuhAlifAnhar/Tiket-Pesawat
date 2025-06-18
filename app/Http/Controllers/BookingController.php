<?php

namespace App\Http\Controllers;

use App\Interfaces\FlightRepositoryInterface;
use App\Interfaces\TransactionRepositoryInterface;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    private TransactionRepositoryInterface $transactionRepository;
    private FlightRepositoryInterface $flightRepository;

    public function __construct(TransactionRepositoryInterface $transactionRepository, FlightRepositoryInterface $flightRepository)
    {
        $this->transactionRepository = $transactionRepository;
        $this->flightRepository = $flightRepository;
    }

    public function booking(Request $request, $flightNumber){
        $this->transactionRepository->saveTransactionDataToSession($request->all());
    }

    public function checkBooking()
    {
        return view('pages.booking.check-booking');
    }
}
