<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:contacts',
            'phone' => 'required|string|max:20',
            'method' => 'required|string|in:email,phone',
            'content' => 'required|string',
        ]);

        $contact = Contact::create($validatedData);

        if ($contact) {

            if ($request->contact_method) {
                return redirect()->back()->with('success', 'You will contact me with a message in your email');
            } else {
                return redirect()->back()->with('success', 'They will call you via your phone');
            }
            
        } else {
            return redirect()->back()->with('error', 'Please enter correct data.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
