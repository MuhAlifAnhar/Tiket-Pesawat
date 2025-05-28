<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/flight', [FlightController::class, 'index'])->name('flight.index');
