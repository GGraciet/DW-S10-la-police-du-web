<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
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

        return view('trips.thank-you', [
            'name' => $validated['name'],
            'age' => $validated['age'],
            'destination' => $validated['destination'],
        ]);
    }
}
