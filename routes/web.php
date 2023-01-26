<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/hotelOld/{id}', function (Request $request) {
    $uri = $request->path();
    $ipAddress = $request->ip();
    $userAgent = $request->userAgent();
    $Method = $request->Method();
    echo "URI: " . $uri . "<br>";
    echo "IP: " . $ipAddress . "<br>";
    echo "userAgent: " . $userAgent . "<br>";
    echo "Method: " . $Method . "<br>";
});

Route::get('/hotel/{id}', [HotelController::class, 'index']);