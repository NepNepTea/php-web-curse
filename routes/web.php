<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/sales', function () {
    return view('sales');
})->name('sales');

Route::get('/guide', function () {
    return view('guide');
})->name('guide');

Route::get('/constructor', function () {
    return view('constructor');
})->name('constructor');

Route::get('/cancel-order', function () {
    return view('cancel-order');
})->name('cancel-order');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/check', function () {
    return view('check');
})->name('check');

Route::get('/delete-profile', function () {
    return view('delete-profile');
})->name('delete-profile');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout', function () {
    return view('logout');
})->name('logout');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');
