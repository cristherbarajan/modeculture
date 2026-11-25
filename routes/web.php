
<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// About Us Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Products Page
Route::get('/products', function () {
    return view('products');
})->name('products');

// Contact Us Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
