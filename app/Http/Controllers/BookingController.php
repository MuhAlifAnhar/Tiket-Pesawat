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
        // dd($request->all());
        $this->transactionRepository->saveTransactionDataToSession($request->all());
        return redirect()->route('booking.chooseSeat', ['flightNumber' => $flightNumber]);
    }

    public function chooseSeat(Request $request, $flightNumber){
        // dd($request->all());
        $transaction = $this->transactionRepository->getTransactionDataFromSession();
        $flight = $this->flightRepository->getFlightByFlightNumber($flightNumber);
        $tier = $flight->classes->find($transaction['flight_class_id']);

        return view('pages.booking.choose-seat', compact('transaction', 'flight', 'tier'));
    }


    public function confirm

    public function checkBooking()
    {
        return view('pages.booking.check-booking');
    }
}
