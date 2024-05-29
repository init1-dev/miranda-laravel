<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ProfileController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/orders', [OrderController::class, 'index'])->name('orders');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
