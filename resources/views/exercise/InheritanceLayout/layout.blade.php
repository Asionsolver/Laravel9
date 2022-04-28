<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <title>@yield('title')</title>
    <style>
        h3 {
            color: #4727a1;
        }

        h4 {
            color: #2787a1;
        }

        h1 {
            color: #794d4d;

        }

        ul li {
            list-style: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 500;
        }

        .footer {
            background-color: #4727a1;
            color: rgb(249, 249, 249);
            padding: 20px;
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 500;
            border-radius: 20px;
        }

    </style>

</head>

<body>
    @yield('content')
    @yield('banners')
    @yield('main-content')
    <p>This is default text from layout.</p>

    @section('description')
        <p>This is default text from layout.</p>
    @endsection
    @section('footer')
        <p class="footer">This is footer from layout.</p>
    @show
</body>

</html>
