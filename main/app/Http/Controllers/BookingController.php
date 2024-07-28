<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Heurs;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heurs = Heurs::all();
        return view('booking', compact('heurs'));
    }

    public function getAvailableDates(Request $request)
    {
        // dd($request);
        $date = $request->input('date'); 
        $bookedHeurs = DB::table('bookings')
                        ->where('date', $date)
                        ->pluck('time'); 

        $allHeurs = Heurs::all()->pluck('heurs'); 

        $availableHeurs = $allHeurs->diff($bookedHeurs);

        return response()->json($availableHeurs);
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
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'Vous' => 'required|string|in:personne,organisation',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'sujet' => 'required|string|max:255',
            'description' => 'nullable|string', 
            'time' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $inputDate = Carbon::parse($request->input('date'));
        $currentDate = Carbon::today(); 

        
        if ($inputDate->lt($currentDate)) {
            return redirect()->back()->withErrors(['date' => 'La date sélectionnée ne peut pas être dans le passé.'])->withInput();
        }

        $validatedData['phone'] = str_replace(' ', '', $validatedData['phone']);
    
        $booking = Booking::create($validatedData);

        if ($booking) {
        return redirect()->back()->with("success", "Vous recevrez un email indiquant si votre candidature a été acceptée ou non.");
        } else {
            return redirect()->back()->with("error", "Votre demande n'a pas été envoyée, veuillez répéter la procédure.");
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
