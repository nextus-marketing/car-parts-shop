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

// Engine Parts

Route::get('/engine-parts/car-engine', function () {
    return view('frontend.Engine-parts.car-engine');
});
Route::get('/engine-parts/cylinder-head', function () {
    return view('frontend.Engine-parts.cylinder-head');
});

Route::get('/engine-parts/camshaft', function () {
    return view('frontend.Engine-parts.camshaft');
});

Route::get('/engine-parts/supercharger', function () {
    return view('frontend.Engine-parts.supercharger');
});

Route::get('/engine-parts/turbocharger', function () {
    return view('frontend.Engine-parts.turbocharger');
});

Route::get('/engine-parts/turbo-charger', function () {
    return view('frontend.Engine-parts.turbo-charger');
});

Route::get('/engine-parts/intake-manifold', function () {
    return view('frontend.Engine-parts.intake-manifold');
});

Route::get('/engine-parts/exhaust-manifold', function () {
    return view('frontend.Engine-parts.exhaust-manifold');
});

Route::get('/engine-parts/throttle-body', function () {
    return view('frontend.Engine-parts.throttle-body');
});

Route::get('/engine-parts/engine-mount', function () {
    return view('frontend.Engine-parts.engine-mount');
});

Route::get('/engine-parts/valve-cover', function () {
    return view('frontend.Engine-parts.valve-cover');
});

Route::get('/engine-parts/fuel-pump', function () {
    return view('frontend.Engine-parts.fuel-pump');
});

Route::get('/engine-parts/coolant-pump', function () {
    return view('frontend.Engine-parts.coolant-pump');
});

Route::get('/engine-parts/radiator', function () {
    return view('frontend.Engine-parts.radiator');
});

Route::get('/engine-parts/vacuum-pump', function () {
    return view('frontend.Engine-parts.vacuum-pump');
});

Route::get('/engine-parts/catalytic-converter', function () {
    return view('frontend.Engine-parts.catalytic-converter');
});

// Transmission Parts
// Transmission Parts Pages

Route::get('/transmission-parts/transmission', function () {
    return view('frontend.Transmission-parts.transmission');
});

Route::get('/transmission-parts/drive-shaft', function () {
    return view('frontend.Transmission-parts.drive-shaft');
});

Route::get('/transmission-parts/axle-shaft', function () {
    return view('frontend.Transmission-parts.axle-shaft');
});

Route::get('/transmission-parts/floor-shifter', function () {
    return view('frontend.Transmission-parts.floor-shifter');
});

Route::get('/transmission-parts/cradle', function () {
    return view('frontend.Transmission-parts.cradle');
});

Route::get('/transmission-parts/crossmember', function () {
    return view('frontend.Transmission-parts.crossmember');
});

Route::get('/transmission-parts/subframe', function () {
    return view('frontend.Transmission-parts.subframe');
});



//Suspension


// Suspension Parts Pages

Route::get('/suspension-parts/shock-absorber', function () {
    return view('frontend.Suspension-parts.shock-absorber');
});

Route::get('/suspension-parts/rack-pinion', function () {
    return view('frontend.Suspension-parts.rack-pinion');
});

Route::get('/suspension-parts/control-arms', function () {
    return view('frontend.Suspension-parts.control-arms');
});

Route::get('/suspension-parts/brake-caliper-rotors', function () {
    return view('frontend.Suspension-parts.brake-caliper-rotors');
});

Route::get('/suspension-parts/power-steering-pump', function () {
    return view('frontend.Suspension-parts.power-steering-pump');
});

Route::get('/suspension-parts/steering-column', function () {
    return view('frontend.Suspension-parts.steering-column');
});

Route::get('/suspension-parts/strut', function () {
    return view('frontend.Suspension-parts.strut');
});


// Electrical Parts

// Electrical Parts Pages

Route::get('/electrical-parts/alternator', function () {
    return view('frontend.Electrical-parts.alternator');
});

Route::get('/electrical-parts/starter', function () {
    return view('frontend.Electrical-parts.starter');
});

Route::get('/electrical-parts/ignition-switch', function () {
    return view('frontend.Electrical-parts.ignition-switch');
});

Route::get('/electrical-parts/fuse-box', function () {
    return view('frontend.Electrical-parts.fuse-box');
});

Route::get('/electrical-parts/instrument-cluster', function () {
    return view('frontend.Electrical-parts.instrument-cluster');
});

Route::get('/electrical-parts/wiper-motor', function () {
    return view('frontend.Electrical-parts.wiper-motor');
});

Route::get('/electrical-parts/window-motor-regulator', function () {
    return view('frontend.Electrical-parts.window-motor-regulator');
});

Route::get('/electrical-parts/cd-player-radio', function () {
    return view('frontend.Electrical-parts.cd-player-radio');
});

Route::get('/electrical-parts/tail-light', function () {
    return view('frontend.Electrical-parts.tail-light');
});

Route::get('/electrical-parts/headlight', function () {
    return view('frontend.Electrical-parts.headlight');
});

Route::get('/electrical-parts/fog-lamps', function () {
    return view('frontend.Electrical-parts.fog-lamps');
});

Route::get('/electrical-parts/abs-unit', function () {
    return view('frontend.Electrical-parts.abs-unit');
});


// Exterior Parts Pages

Route::get('/exterior-parts/bumpers', function () {
    return view('frontend.Exterior-parts.bumpers');
});

Route::get('/exterior-parts/fenders', function () {
    return view('frontend.Exterior-parts.fenders');
});

Route::get('/exterior-parts/hood', function () {
    return view('frontend.Exterior-parts.hood');
});

Route::get('/exterior-parts/doors', function () {
    return view('frontend.Exterior-parts.doors');
});

Route::get('/exterior-parts/mirrors', function () {
    return view('frontend.Exterior-parts.mirrors');
});

Route::get('/exterior-parts/grilles', function () {
    return view('frontend.Exterior-parts.grilles');
});

Route::get('/exterior-parts/fender-flare', function () {
    return view('frontend.Exterior-parts.fender-flare');
});

Route::get('/exterior-parts/wheel-hub', function () {
    return view('frontend.Exterior-parts.wheel-hub');
});

Route::get('/exterior-parts/wheel-rim', function () {
    return view('frontend.Exterior-parts.wheel-rim');
});

// Interior Parts Pages

Route::get('/interior-parts/seats', function () {
    return view('frontend.Interior-parts.seats');
});

Route::get('/interior-parts/seat-belts', function () {
    return view('frontend.Interior-parts.seat-belts');
});

Route::get('/interior-parts/center-console', function () {
    return view('frontend.Interior-parts.center-console');
});

Route::get('/interior-parts/sun-visor', function () {
    return view('frontend.Interior-parts.sun-visor');
});

Route::get('/interior-parts/mirrors', function () {
    return view('frontend.Interior-parts.mirrors');
});

Route::get('/interior-parts/air-bag', function () {
    return view('frontend.Interior-parts.air-bag');
});

Route::get('/interior-parts/car-steering', function () {
    return view('frontend.Interior-parts.car-steering');
});

Route::get('/sitemap.xml', function () {
    $sitemapPath = public_path('sitemap.xml');
    if (file_exists($sitemapPath)) {
        return response()->file($sitemapPath, ['Content-Type' => 'text/xml']);
    }
    return response('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"><url><loc>' . url('/') . '</loc></url></urlset>', 200, ['Content-Type' => 'text/xml']);
});

require __DIR__ . '/auth.php';
require __DIR__ . '/backend.php';
require __DIR__ . '/frontend.php';
