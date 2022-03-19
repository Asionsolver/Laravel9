<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Named Routes</title>
</head>

<body>
    <h1>This is Named Routes Page.</h1>
    <hr>
    {{-- <ul>
        <li><a href="/named">Home</a></li>
        <li><a href="/nameddetails">Named Route Details</a></li>
    </ul> --}}

    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href=" {{ route('details', ['category' => 'mobile']) }}">Named Route Details</a></li>
    </ul>
</body>

</html>
