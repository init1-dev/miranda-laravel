<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name("index");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/offers', [OfferController::class, 'index'])->name("offers");

Route::get('/room/{room}', [RoomController::class, 'show'])->name("room");

Route::get('/rooms', [RoomController::class, 'listIndex'])->name("rooms");

Route::get('/rooms-grid', [RoomController::class, 'index'])->name("room-grid");