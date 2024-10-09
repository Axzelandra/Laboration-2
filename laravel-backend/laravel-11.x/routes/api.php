<?php

use App\Http\Controllers\BookingController;

Route::get('bookings', [BookingController::class, 'index']);
Route::get('bookings/{id}', [BookingController::class, 'show']);
Route::post('bookings', [BookingController::class, 'store']);
Route::put('bookings/{id}', [BookingController::class, 'update']);
Route::delete('bookings/{id}', [BookingController::class, 'destroy']);
