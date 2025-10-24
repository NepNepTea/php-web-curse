<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\BrandController;
use App\Models\Brand;

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

Route::view('/register', 'auth.register')

    ->middleware('guest')

    ->name('register');

Route::post('/register', Register::class)

    ->middleware('guest')

    ->name('register');

// Login routes
Route::view('/login', 'auth.login')
    ->middleware('guest')
    ->name('login');

Route::post('/login', Login::class)
    ->middleware('guest');

// Logout route
Route::post('/logout', Logout::class)
    ->middleware('auth')
    ->name('logout');

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');


Route::view('/catalog-add', 'catalog-add', ['brands' => Brand::all()])

    ->name('catalog-add');

Route::post('/catalog-add', [CatalogController::class, 'create']);

Route::view('/brand-add', 'brand-add')

    ->name('brand-add');

Route::post('/brand-add', [BrandController::class, 'create']);
