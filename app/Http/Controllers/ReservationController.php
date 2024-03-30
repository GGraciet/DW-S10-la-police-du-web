<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();

        return view('trips.index', [
            'reservations' => $reservations,
        ]);
    }

    public function create()
    {
        return view('trips.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|numeric|min:0',
            'destination' => 'required|in:France,Spain',
        ]);

        $reservation = Reservation::create($validated);

        return view('trips.thank-you', [
            'name' => $reservation->name,
            'age' => $reservation->age,
            'destination' => $reservation->destination,
        ]);
    }
}
