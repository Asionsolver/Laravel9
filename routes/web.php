<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DemoController;
// use App\Http\Controllers\PageController;


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

// Route::get('user/{u_id}', function ($id) {
//     return "User id is " . $id;
// });

// Route::get('user/{u_id}/comment/{c_id}', function ($u_id, $c_id) {
//     return "User id is " . $u_id . " and Comment id is " . $c_id;
// });

// Route::get('student/{name?}', function ($name = null) {
//     return "My name is " . $name;
// });
// Route::get('student/{name?}', function ($name = "enter your name") {
//     return "My name is " . "{ " . $name . " }";
// });

// Route::get('student/{name?}/id/{u_id?}', function ($name = "enter your name", $id = "enter your id") {
//     return "My name is "  . $name  . ". My id is " . $id;
// });

// Route::get('user/{name}/{u_id}', function ($name, $id) {
//     return "User name is " . $name . " and id is " . $id;
// })->where(['name' => '[A-Za-z]+', 'u_id' => '[0-9]+']);


Route::get('user/{name}/{u_id}', function ($name, $id) {
    return "User name is " . $name . " and id is " . $id;
})->whereNumber('id')->whereAlpha('name');

// Route::redirect('enter', 'go');
// Route::redirect('enter', 'go', 301);
// Route::permanentRedirect('enter', 'go');

Route::fallback(function () {
    return "You can enter not right route";
});





// Route::get('/', function () {
//     return('welcome home page');
// });

// Route::get('/contact', function () {
//     return('welcome to contact page');
// });

// Route::get('/about', function () {
//     return('welcome to about page');
// });

// Route::get('/','App\Http\Controllers\PageController@home');
// Route::get('/about','App\Http\Controllers\PageController@about');
// Route::get('/contact','App\Http\Controllers\PageController@contact');