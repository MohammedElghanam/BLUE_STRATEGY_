<?php

namespace App\Http\Controllers;



use App\Models\Booking;
use App\Models\Contact;

use App\Mail\Send_Message;
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
        $later = Booking::where('status', 'later')->orderBy('date', 'asc')
        ->orderBy('time', 'asc')
        ->get();
        $invalid = Booking::where('status', 'invalid')->get();
        $user = Auth()->user();
        $contacts = Contact::all();
        // dd($user);
        return view('dashboard', compact('contacts', 'user', 'valid', 'later','invalid'));
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
        if ($booking) {
            $booking->status = 'later';
            $booking->save();
            Mail::to($request->email)->send(new invalideBooking($booking));
            return redirect()->route('dashboard');
        }else{
            return "error";
        }
    }


    public function send_message(Request $request){
        // dd($request);
        Mail::to($request->email)->send(new Send_Message($request));
        return redirect()->route('dashboard');
    }

    
}
