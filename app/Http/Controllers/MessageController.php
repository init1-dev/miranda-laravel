<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Store a newly created Message in storage.
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
            return back()->with('error', $e->getMessage());
        } catch (\Exception $e) {
            return back()->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }

    }
}
