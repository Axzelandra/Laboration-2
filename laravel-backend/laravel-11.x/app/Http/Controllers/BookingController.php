<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Visa alla bokningar (API)
    public function index() {
        $bookings = Booking::all();
        return response()->json($bookings);  // Returnera som JSON för frontend
    }

    // Visa en specifik bokning (API)
    public function show($id) {
        $booking = Booking::find($id);
        if ($booking) {
            return response()->json($booking);  // Returnera bokningen som JSON
        } else {
            return response()->json(['message' => 'Booking not found'], 404);
        }
    }

    // Skapa en ny bokning (API)
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required|date',
        ]);

        $booking = Booking::create($validated);
        return response()->json($booking, 201);  // Returnera den skapade bokningen som JSON
    }

    // Uppdatera en befintlig bokning (API)
    public function update(Request $request, $id) {
        $booking = Booking::find($id);
        if (!$booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required|date',
        ]);

        $booking->update($validated);
        return response()->json($booking);  // Returnera den uppdaterade bokningen som JSON
    }

    // Radera en bokning (API)
    public function destroy($id) {
        $booking = Booking::find($id);
        if (!$booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        $booking->delete();
        return response()->json(['message' => 'Booking deleted successfully']);  // Returnera framgångsmeddelande
    }
}
