<?php

namespace App\Http\Controllers;

use App\Models\reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        
        $imagePath = $request->file('image')->store('uploads', 'public/references');

        
        $image = new reference();
        $image->filename = $imagePath;
        $image->save();

        return redirect()->back()->with('success', 'Image uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(reference $reference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reference $reference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reference $reference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reference $reference)
    {
        //
    }
}
