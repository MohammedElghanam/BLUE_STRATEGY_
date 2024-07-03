<?php

namespace App\Http\Controllers;



use App\Models\Booking;

use App\Mail\validBooking;
use App\Mail\ValideBooking;
use Illuminate\Http\Request;
use App\Mail\invalideBooking;
use Illuminate\Support\Facades\Mail;

class dashboardController extends Controller
{
    
    public function index()
    {
        $valid = Booking::where('status', 'valid')->orderBy('date', 'asc')
                                                ->orderBy('time', 'asc')
                                                ->get();
        $invalid = Booking::where('status', 'invalid')->get();
        return view('dashboard', compact('valid', 'invalid'));
    }

    public function valid(Request $request)
    {
        $bookings = Booking::findOrFail($request->id);
        if ($bookings) {
            $bookings->status = 'valid';
            $bookings->save();
            Mail::to($request->email)->send(new ValideBooking($bookings));
            return redirect()->route('dashboard');
        }else{
            return "error";
        }
    }

    public function invalid(Request $request)
    {
        $booking = Booking::findOrFail($request->id);
        Mail::to($request->email)->send(new invalideBooking($booking));
        $booking->delete();
        return redirect()->route('dashboard');
    }

    
}
