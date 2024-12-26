<?php

use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/services', function () {
    return view('frontend.services');
})->name('services');

Route::get('/appointment', function () {
    return view('frontend.appointment');
})->name('appointment');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');



// Backend Routes
Route::get('/admin', function () {
    return view('backend.home');
})->name('home');
