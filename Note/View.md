// Passing data to view

Route::get('/custom', function () {
    return view('custom', ['name' => 'John']);
});

// Passing data to View with With Method

Route::get('/custom', function () {
    return view('custom')->with('name', 'John');
});

Route::get('admin', function () {
    return view('admin.profile');
});

Route::get('contacts', function () {
    return view('admin.contact', ['name' => 'Ashis']);
});

Route::get('contacts', function () {
    return view('admin.contact', ['name' => 'Ashis', 'id' => 201311049]);
});
 Route::get('contacts', function () {
    return view('admin.contact')->with('name', 'Ashis');
});


Route::get('abouts', function () {
    return view('admin.about');
});

Route::get('users/{u_id}', function ($id) {
    return view('admin.user', ['id' => $id]);
});

Route::get('posts/{p_id}/comment/{c_id?}', function ($p_id, $c_id) {
    return view('admin.post', ['p_id' => $p_id, 'c_id' => $c_id]);
});

Route::get('students/{name?}', function ($name = 'Enter your name') {     
    return view('admin.student', ['name' => $name]);
 });

Route::get('/contacts/{name}/{id}/{contact}/{pincode}', function ($id, $name, $contact, $pincode) {
    return view('admin.contact', ['id' => $id, 'name' => $name, 'contact' => $contact, 'pincode' => $pincode]);
})->where(['id' => '[0-9]+', 'name' => '[a-z]+', 'contact' => '[0-9]+', 'pincode' => '[0-9]+']);
