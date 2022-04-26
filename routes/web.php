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

// Route returns a string
Route::get('/about', function () {
    return 'This is about page';
});

// Route returns a parameter
Route::get('/about/{id}', function ($id) {
    return 'This is about page with id: ' . $id;
});

// Route returns a multiple parameters
Route::get('/about/{id}/{name}', function ($id, $name) {
    return 'This is about page with id: ' . $id . ' and name: ' . $name;
});

//multiple routes multiple parameters
Route::get('/about/{id}/user/{name}/{age}', function ($id, $name, $age) {
    return 'This is about page with id: ' . $id . ' and name: ' . $name . ' and age: ' . $age;
});

// Route returns optional parameters
Route::get('/optional/user/{id?}', function ($id = 'Enter your id') {
    return 'This is about page with id: ' . $id;
});

//Route with regular expression
Route::get('/regular/{id}/user/{name}/{age}', function ($id, $name, $age) {
    return 'This is about page with id: ' . $id . ' and name: ' . $name . ' and age: ' . $age;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+', 'age' => '[0-9]+']);

// Route with helper method
Route::get('/helper/{id}/user/{name}/{age}', function ($id, $name, $age) {
    return 'This is about page with id: ' . $id . ' and name: ' . $name . ' and age: ' . $age;
})->whereAlpha('name')->whereNumber('age')->whereNumber('id');

// Route with redirect
Route::get('/redirect', function () {
    return redirect('/about');
});

// Route with permanent redirect
Route::get('/permanent', function () {
    return redirect('/about', 301);
});



Route::get('/custom', function () {
    return view('custom');
});

// Route::get('/include', function () {
//     return view('include', ['name' => 'Ashis']);
// });
// Route::get('/component', function () {
//     return view('component');
// });
// Route::get('/slots', function () {
//     return view('slots');
// });
// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/homecontact', function () {
//     return view('homecontact');
// });
// Route::get('/inheritance', function () {
//     return view('templateInheritance');
// });
// Route::get('/details', function () {
//     return view('admin.inheritance');
// });
// Route::get('/named', function () {
//     return view('namedroutes');
// })->name('home');
// Route::get('/nameddetails', function () {
//     return view('admin.namedroutesdetails');
// })->name('details');
// Route::get('/arguments/{category}', function ($category) {
//     return view('admin.namedarg', ['cat' => $category]);
// })->name('arguments');

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


// Route::get('user/{name}/{u_id}', function ($name, $id) {
//     return "User name is " . $name . " and id is " . $id;
// })->whereNumber('id')->whereAlpha('name');

// Resume Laravel Project

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;


// Route::get('/home', function () {
//     return view('resumeProject.home');
// })->name('home');
// Route::get('/skill', function () {
//     return view('resumeProject.skill');
// })->name('skill');
// Route::get('/news', function () {
//     return view('resumeProject.news');
// })->name('news');

// Route::get('services', [ServiceController::class, 'show'])->name('services');
// Route::get('contact', [ContactController::class, 'show'])->name('contact');

// Route::get('/home', function () {
//     return view('resumeProject.home');
// });

// Route::redirect('enter', 'go');
// Route::redirect('enter', 'go', 301);
// Route::permanentRedirect('enter', 'go');

Route::fallback(function () {
    return "You can enter not right route";
});

// Route::get('admin', function () {
//     return view('admin.profile');
// });

// Route::get('contacts', function () {
//     return view('admin.contact', ['name' => 'Ashis']);
// });

// Route::get('contacts', function () {
//     return view('admin.contact', ['name' => 'Ashis', 'id' => 201311049]);
// });
//  Route::get('contacts', function () {
//     return view('admin.contact')->with('name', 'Ashis');
// });


// Route::get('abouts', function () {
//     return view('admin.about');
// });

// Route::get('users/{u_id}', function ($id) {
//     return view('admin.user', ['id' => $id]);
// });

// Route::get('posts/{p_id}/comment/{c_id?}', function ($p_id, $c_id) {
//     return view('admin.post', ['p_id' => $p_id, 'c_id' => $c_id]);
// });

// Route::get('students/{name?}', function ($name = 'Enter your name') {
//     return view('admin.student', ['name' => $name]);
// });

// Route::get('/','App\Http\Controllers\PageController@home');
// Route::get('/about','App\Http\Controllers\PageController@about');
// Route::get('/contact','App\Http\Controllers\PageController@contact');

// Route::get('about/{name}', [aboutController::class, 'show']);
// Route::get('show', [aboutController::class, 'show']);
// Route::get('show/{name}', [aboutController::class, 'show']);
// Route::get('show', [aboutController::class, 'show']);
// Route::get('contact', [aboutController::class, 'contact']);
// Route::get('contact', [DemoController::class, 'show']);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Middleware in Laravel
// use App\Http\Controllers\reportController;
use App\Http\Controllers\MiddlewareController;

// Route::get('middleware', function () {
//     return view('middleware');
// }); //->middleware('construction');
// Route::get('dashboard', function () {
//     return view('dashboard');
// });
// Route::get('stock', function () {
//     return view('stock');
// }); //->middleware('construction');

// Route::get('report', [reportController::class, 'show']);
// Route::get('report', [MiddlewareController::class, 'show']); //->middleware('construction')

// using grouping middleware with group routes

// Route::middleware(['construction'])->group(function () {
//     Route::get('dashboard', function () {
//         return view('dashboard');
//     });

//     Route::get('middleware', function () {
//         return view('middleware');
//     });

//     Route::get('report', [MiddlewareController::class, 'show']);
// });

// Laravel Form
use App\Http\Controllers\RegistrationController;

// Route::get('registration', [RegistrationController::class, 'showForm']);
// Route::post('registration', [RegistrationController::class, 'signup']);

// Route::view('olddata', 'olddata')->name('old');
// Route::view('olddata', 'olddata')->name('old');

use App\Http\Controllers\StudentController;

// Route::get('student', [App\Http\Controllers\StudentController::class, 'showData']);
// Route::get('student', [StudentController::class, 'test']);

use App\Http\Controllers\StudentDetailsController;

// Route::get('studentdetails', [StudentDetailsController::class, 'show']);