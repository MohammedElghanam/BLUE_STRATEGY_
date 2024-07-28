<?php

namespace App\Http\Controllers;



use App\Models\Image;
use App\Models\Visit;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\reference;
use App\Mail\Send_Message;
use App\Mail\validBooking;
use App\Mail\ValideBooking;
use Illuminate\Http\Request;
use App\Mail\invalideBooking;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

class dashboardController extends Controller
{
    
    public function index()
    {
        // Cache::get();
        // Cache::has();
        // Cache::forever();

        $valid = Booking::where('status', 'valid')->orderBy('date', 'asc')
        ->orderBy('time', 'asc')
        ->get();
        $later = Booking::where('status', 'later')->orderBy('date', 'asc')
        ->orderBy('time', 'asc')
        ->get();
        $invalid = Booking::where('status', 'invalid')->get();
        $user = Auth()->user();
        $contacts = Contact::all();
        $visitCount = Visit::count();
        $images = Image::paginate(4);
        // dd($user);
        return view('dashboard', compact('contacts', 'user', 'valid', 'later','invalid', 'visitCount', 'images'));
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

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);        

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('references'), $imageName);

        $image = new Image();
        $image->image = 'references/' . $imageName;
        $image->save();

        if ($image) {
            return redirect()->back()->with('success', 'Image uploaded successfully.');
        } else {
            return redirect()->back()->with('error', 'Image upload failed.');
        }
    
    }
    
    public function destroy($id)
    {
        $image = Image::find($id);
        // dd($image);

        
        if ($image->image) {
            $imagePath = public_path($image->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        
        $image->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }

}
