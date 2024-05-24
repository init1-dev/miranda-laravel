<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Store a newly created Booking in storage.
     */
    public function store(Request $request)
    {
        $id = $request->room_id;
        $check_in = $request->check_in;
        $check_out = $request->check_out;
        
        $isRoomAvailable = $check_in && $check_out
            ? Room::isRoomAvailable($id, $check_in, $check_out)
            : false;

        if($isRoomAvailable){
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
                return redirect()->route('index')->with('success', 'Booking ordered successfully!');
            } catch (QueryException $e) {
                return back()->with('error', $e->getMessage());
            } catch (\Exception $e) {
                return back()->with('error', 'An unexpected error occurred: ' . $e->getMessage());
            }
        } else {
            return $check_in && $check_out
                ? back()->with('error', "Sorry, this room is not available between selected dates")
                : back()->with('error', "Some fields are not fulfilled");
        }
    }
}
