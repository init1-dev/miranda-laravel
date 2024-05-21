<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
require_once __DIR__ . '../../../../utils/room/formRoomData.php';
require_once __DIR__ . '../../../../utils/room/getAmenity.php';

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::with(['type', 'amenities'])->get();
        $roomData = formRoomData($rooms);

        return view('rooms-grid', [
            'rooms' => $roomData
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function listIndex()
    {
        $rooms = Room::with(['type', 'amenities'])->get();
        $roomsData = formRoomData($rooms);

        $arrival = isset($_GET['check_in']) ? $_GET['check_in'] : null;
        $departure = isset($_GET['check_out']) ? $_GET['check_out'] : null;

        // print_r($roomsData[0]);

        return view('room-list', [
            'rooms' => $roomsData,
            'arrival' => $arrival,
            'departure' => $departure
        ]);
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
    public function show(Room $room)
    {
        $check_in = isset($_GET['check_in']) ? $_GET['check_in'] : null;
        $check_out = isset($_GET['check_out']) ? $_GET['check_out'] : null;

        $rooms = Room::with(['type', 'amenities'])->take(5)->get();
        $roomData = formRoomData([$room])[0];
        $related = formRoomData($rooms);

        return view('room-details', [
            'id' => $room['id'],
            'room' => $roomData,
            'related' => $related,
            'check_in' => $check_in,
            'check_out' => $check_out
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
