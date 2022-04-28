Route::get('/home', function () {
    return view('exercise.componentLayout.home');
});
Route::get('/contact', function () {
    return view('exercise.componentLayout.contact');
});

<!-- Contact.blade.php file Code: -->
<x-user.layout>
    <x-slot name='title'>Contact</x-slot>
    <x-slot name='banner'>Contact Page Banner</x-slot>

    <h3>Contact Page Banner Content</h3>
    <ul>
        <li>Number</li>
        <li>Address</li>
        <li>Emain</li>
        <li>Twitter</li>
    </ul>
</x-user.layout>

<!-- Home.blade.php file Code: -->

<x-user.layout>
    <x-slot name='title'>Home</x-slot>
    <x-slot name='banner'>Home Page Banner</x-slot>
    <h3>Home Page Banner Content</h3>
    <ul>
        <li>Glich</li>
        <li>Bugs</li>
        <li>Faster</li>
        <li>Research</li>
    </ul>
</x-user.layout>

<!--Component: Layout.blade.php file Code: -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    {{ $slot }}
    <h1>{{ $banner }}</h1>
</body>

</html>
