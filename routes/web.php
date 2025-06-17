<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/flight', [FlightController::class, 'index'])->name('flight.index');

Route::get('check-booking', [BookingController::class, 'checkBooking'])->name('booking.check');
