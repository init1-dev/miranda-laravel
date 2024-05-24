<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource for index view.
     */
    public function home()
    {
        $roomsData = Room::getRooms();

        return view('index', [
            'rooms' => $roomsData
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomsData = Room::getRooms();

        return view('rooms-grid', [
            'rooms' => $roomsData
        ]);
    }

    /**
     * Display a listing of the resource for room list view.
     */
    public function listIndex()
    {
        $arrival = request('check_in');
        $departure = request('check_out');

        $roomsData = Room::getAvailableRooms($arrival, $departure);

        return view('room-list', [
            'rooms' => $roomsData,
            'arrival' => $arrival,
            'departure' => $departure
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        $check_in = request('check_in');
        $check_out = request('check_out');

        $related = Room::getPopular();

        return view('room-details', [
            'id' => $room['id'],
            'room' => $room,
            'related' => $related,
            'check_in' => $check_in,
            'check_out' => $check_out
        ]);
    }

    /**
     * Display the specified resource for offers view.
     */
    public function offers()
    {
        $roomsData = Room::getOffers();
        $related = Room::getPopular();

        return view('offers', [
            'offers' => $roomsData,
            'popular' => $related
        ]);
    }
}
