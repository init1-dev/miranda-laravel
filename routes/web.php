<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RoomController::class, 'home'])->name("index");

Route::view('/about', 'about')->name("about");

Route::view('/contact', 'contact')->name("contact");

Route::get('/offers', [RoomController::class, 'offers'])->name("offers");

Route::get('/room/{room}', [RoomController::class, 'show'])->name("room");

Route::get('/rooms', [RoomController::class, 'listIndex'])->name("rooms");

Route::get('/rooms-grid', [RoomController::class, 'index'])->name("room-grid");

Route::post('/booking-form', [BookingController::class, 'store'])->name("booking-form");

Route::post('/contact', [MessageController::class, 'store'])->name("contact-form");