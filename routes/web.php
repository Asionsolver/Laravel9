<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\aboutController;

use App\Http\Controllers\product;
use App\Http\Controllers\QueryBuilder;
use App\Http\Controllers\Pagination;
use App\Http\Controllers\Services;
use App\Http\Controllers\Contact;

/*
|--------------------------------------------------------------------------
| Web Routes
|


--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('SimpleProject.home');
})->name('home');
Route::get('skill', function () {
    return view('SimpleProject.skill');
})->name('skill');

Route::get('services', [Services::class, 'services'])->name('services');

Route::get('contact', [Contact::class, 'contact'])->name('contact');







// Fallback Route
Route::fallback(function () {
    return "You can enter not right route";
});