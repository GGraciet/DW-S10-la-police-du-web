<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show contact view.
     * 
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store contact message.
     * 
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'phone' => 'nullable|min:10',
            'email' => 'required|email:rfc,dns|max:255',
            'message' => 'required|string|min:10|max:1000'
        ]);

        ContactMessage::create($validated);

        return view('contact.confirmation', [
            'name' => $validated['name']
        ]);
    }
}
