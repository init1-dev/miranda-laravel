<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class MessageController extends Controller
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
            'full_name' =>  'required|string|max:255',
            'phone' => 'required|string|max: 20',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'stars' => 'required|integer|between:1,5',
            'message' => 'required|string',
        ]);

        
        try {
            Message::create($request->all());
            return redirect()->route('index')->with('success', 'Message sent successfully!');
        } catch (QueryException $e) {
            return redirect()->route('index')->with('error', $e->getMessage());
        } catch (\Exception $e) {
            return redirect()->route('index')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
