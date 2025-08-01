<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/flight', [FlightController::class, 'index'])->name('flight.index');
Route::get('/flight/{flightNumber}/choose-tier', [FlightController::class, 'show'])->name('flight.show');

Route::get('flight/booking/{flightNumber}', [BookingController::class, 'booking'])->name('booking');

Route::get('flight/booking/{flightNumber}/choose-seat', [BookingController::class, 'chooseSeat'])->name('booking.chooseSeat');
Route::post('flight/booking/{flightNumber}/confirm-seat', [BookingController::class, 'confirmSeat'])->name('booking.confirmSeat');

Route::get('flight/booking/{flightNumber}/passenger-details', [BookingController::class, 'passengerDetails'])->name('booking.passengerDetails');
Route::get('check-booking', [BookingController::class, 'checkBooking'])->name('booking.check');
