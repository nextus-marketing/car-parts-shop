<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/engine-parts', function () {
    return view('frontend.engine-parts');
});

Route::get('/transmission-parts', function () {
    return view('frontend.transmission-parts');
});

Route::get('/suspension-parts', function () {
    return view('frontend.suspension-parts');
});

Route::get('/electrical-parts', function () {
    return view('frontend.electrical-parts');
});

Route::get('/exterior-parts', function () {
    return view('frontend.exterior-parts');
});

Route::get('/interior-parts', function () {
    return view('frontend.interior-parts');
});

Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
});

Route::get('/terms-of-conditions', function () {
    return view('frontend.terms-of-conditions');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/backend.php';
require __DIR__ . '/frontend.php';
