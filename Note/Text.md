




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
