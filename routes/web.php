<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/offers', [RoomController::class, 'index']);

Route::get('/room/{room}', [RoomController::class, 'show']);

Route::get('/rooms', [RoomController::class, 'index']);

Route::get('/rooms-grid', [RoomController::class, 'index']);