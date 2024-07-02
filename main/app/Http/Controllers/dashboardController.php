<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('dashboard', compact('bookings'));
    }

    public function valid(Request $request)
    {
        // return "hello"; 
        // dd($request);
        $booking = Booking::findOrFail($request->id);
        if ($booking) {
            $booking->status = 'valid';
            $booking->save();
            Mail::to($request->email)->send(new BookingMail());
            return redirect()->route('dashboard');
        }else{
            return "error";
        }
    }

    public function invalid(Request $request)
    {
        // return "howare you";
        // dd($request);
        // $booking = Booking::findOrFail($request->id);
        // $booking->delete();
        return redirect()->route('dashboard');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
