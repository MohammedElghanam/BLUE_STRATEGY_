<?php

namespace App\Http\Controllers;


use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'sujet' => 'required|string|max:255',
            'description' => 'nullable|string', // Allow null values
            'time' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $validatedData['phone'] = str_replace(' ', '', $validatedData['phone']);
    
        $booking = Booking::create($validatedData);

        if ($booking) {
        return redirect()->back()->with('success', 'User created successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to create user.');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
