<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('home');

// Route for blogs page
Route::get('/blogs', function () {
    return view('blog/index');
})->name('blogs');
