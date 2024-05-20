<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/offers', function () {
    return view('offers');
});

Route::get('/room/{id}', function () {
    return view('room-details');
});

Route::get('/rooms', function () {
    return view('room-list');
});

Route::get('/rooms-grid', function () {
    return view('rooms-grid');
});