<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\aboutController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/custom', function () {
    return view('custom');
});


// Fallback Route
Route::fallback(function () {
    return "You can enter not right route";
});