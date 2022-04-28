<!DOCTYPE html>
<html lang="en">
include.blade.php file code:
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include Page</title>
</head>

<body>
    <h1>This is Include Page.</h1>
    <h3>Name: {{ $name }}</h3>
    @include('exercise.plain', ['pincode' => 48974656544])

</body>

</html>


plain.blade.php file code:
    <h1>This is Plain Page.</h1>
    <h3>Welcome to our page.</h3>
    <h4>Name:{{ $name }}</h4>
    <h4>Pincode:{{ $pincode }}</h4>


Route System Code:
Route::get('/', function () {
    return view('welcome');
});

Route::get('/include', function () {
    return view('exercise.include', ['name' => 'Nguyen']);
});


Route::get('/product', [product::class, 'show']);

Controller:Product.php file code:
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    function show()
    {
        $websiteName = 'Asion';
        $user = 'Admin';
        $userType = $user === 'admin' ? true : false;
        return view('exercise.productPage', ['websiteName' => $websiteName, 'userType' => $userType]);
    }
}
