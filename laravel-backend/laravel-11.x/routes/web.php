<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

// Standardroute för startsidan, kan bytas ut om du vill ha något annat
Route::get('/', function () {
    return view('welcome');
});

// Rutter för bokningssystemet
Route::post('/bookings', [BookingController::class, 'store']);  // Skapa en bokning
Route::get('/bookings', [BookingController::class, 'index']);   // Hämta alla bokningar

// Route för kontaktformuläret
Route::post('/contact', [ContactController::class, 'send']);  // Skicka kontaktformulär
