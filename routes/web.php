<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PageController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return('welcome home page');
// });

// Route::get('/contact', function () {
//     return('welcome to contact page');
// });

// Route::get('/about', function () {
//     return('welcome to about page');
// });

Route::get('/','App\Http\Controllers\PageController@home');
Route::get('/about','App\Http\Controllers\PageController@about');
Route::get('/contact','App\Http\Controllers\PageController@contact');