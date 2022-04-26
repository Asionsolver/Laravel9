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

// Route::get('/category/{category}', function ($category) {
//     return 'This is about page with category: ' . $category;
// })->whereIn('category', ['movie', 'song', 'painting']);

// Route with redirect
Route::get('/redirect', function () {
    return redirect('/about');
});

// Route::redirect('enter', 'go');
// Route::redirect('enter', 'go', 301);
// Route::permanentRedirect('enter', 'go');


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
