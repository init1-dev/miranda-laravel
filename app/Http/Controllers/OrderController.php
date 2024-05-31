<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Room;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordersData = Order::getOrdersByUser();
        $rooms = Room::getRooms();
        $orderTypes = Order::getTypes();

        return view('orders', [
            'orders' => $ordersData,
            'rooms' => $rooms,
            'types' => $orderTypes
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
        $request->validate([
            'room_id' => 'required|numeric',
            'type' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        
        try {
            Order::create(['user_id' => Auth::id(), ...$request->all()]);
            return redirect()->route('orders')->with('success', 'Order created successfully!');
        } catch (QueryException $e) {
            return back()->with('error', $e->getMessage());
        } catch (\Exception $e) {
            return back()->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        try {
            $order = Order::find($request->id);
            $order->type = $request->type;
            $order->description = $request->description;
            $order->save();

            return redirect()->route('orders')->with('success', 'Order updated successfully!');
        } catch (QueryException $e) {
            return back()->with('error', $e->getMessage());
        } catch (\Exception $e) {
            return back()->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $order_data = json_decode($request->order_data);
            $order = Order::find($order_data->id);
            $order->delete();
            return redirect()->route('orders')->with('success', 'Order deleted successfully!');
        } catch (QueryException $e) {
            return back()->with('error', $e->getMessage());
        } catch (\Exception $e) {
            return back()->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }
}
