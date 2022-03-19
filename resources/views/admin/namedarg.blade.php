<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Named Routes Arguments</title>
</head>

<body>
    <h1>Welcome to Named Routes Argument Pass Page.</h1>
    <hr>
    {{-- <ul>
        <li><a href="/named">Home</a></li>
        <li><a href="/nameddetails">Named Route Details</a></li>
    </ul> --}}
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href=" {{ route('details') }}">Named Route Details</a></li>
        <li><a href=" {{ route('arguments', ['category' => 'mobile']) }}">Arguments</a></li>
    </ul>
</body>

</html>
