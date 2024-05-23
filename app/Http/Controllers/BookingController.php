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
        // dd($request->all());
        $request->validate([
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'full_name' =>  'required|string|max:255',
            'phone' => 'required|string|max: 20',
            'email' => 'required|email|max:255',
            'special_request' => 'string',
            'room_id' => 'required|numeric'
        ]);

        try {
            Booking::create($request->all());
            return back()->with('success', 'Booking ordered successfully!');
        } catch (\Throwable $th) {
            return back()->with('error', 'An error occurred while processing your booking.');
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
