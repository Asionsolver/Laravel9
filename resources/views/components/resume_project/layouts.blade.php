<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Add Bootstrap CSS File --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    {{-- Add Fontawesome File --}}
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    {{-- Add Custom CSS File --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Add Google Font Link --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <title>{{ $title }}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg  navbar-light bg-light">
        <div class="container ">
            <a class="navbar-brand" href="{{ route('home') }}">Resume</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('home' ? 'active' : '') }}" aria-current="page"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('services' ? 'active' : '') }} "
                            href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('skill' ? 'active' : '') }}"
                            href="{{ route('skill') }}">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('news' ? 'active' : '') }}"
                            href="{{ route('news') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('contact' ? 'active' : '') }} "
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-sm-2">
                @include('include.sidebar')
            </div>
            <div class="col-sm-10">
                {{ $content }}

            </div>
        </div>
    </div>

    {{-- Add Bootstrap Js File --}}
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    {{-- Add Fontawesome Js File --}}
    <script src="{{ asset('js/all.js') }}"></script>
    {{-- Add Custom Js File --}}
    {{-- <script src="{{asset('js/main.js')}}"></script> --}}
</body>

</html>
