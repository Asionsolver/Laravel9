<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href={{ url('css/style.css') }}>
    <title>@yield('title')</title>
</head>

<body>
    {{-- <img src="img/img.jpg" alt="img"> --}}
    <img src="{{ asset('img/img.jpg') }}" alt="img">
    @yield('page-heading')
    @yield('banner')
    @yield('main')
    @section('content-details')

        <h4>What is Inheritance.</h4>
        <hr>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At libero, possimus facere tenetur ea animi nostrum!
            Quos
            enim fugiat pariatur, esse libero facere praesentium labore!</p>
        <h4>What is Inheritance.</h4>
        <hr>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At libero, possimus facere tenetur ea animi nostrum!
            Quos
            enim fugiat pariatur, esse libero facere praesentium labore!</p>
    @show
    {{-- <script src="js/main.js"></script> --}}
    {{-- <script src="{{asset("js/main.js")}}"></script> --}}
    <script src={{ url('js/main.js') }}></script>
</body>

</html>
