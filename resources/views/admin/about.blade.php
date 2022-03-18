<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hello about Page.</h1>
    <h1>Hello Contact Page.</h1>
    {{-- @if ($name == 'Ashis')
        <h1>You are right person {{ $name }}.</h1>
    @endif --}}

    {{-- @if ($name == 'Asion')
        <h1>You are right person {{ $name }}</h1>
    @else
        <h1>You are not right person {{ $name }}</h1>
    @endif --}}

    {{-- @if ($name == 'Asion')
        <h1>You are right person {{ $name }}</h1>
    @elseif ($name == 'Ashis')
        <h1>You are right person {{ $name }}</h1>
    @else
        <h1>You are not right person {{ $name }}</h1>
    @endif --}}

    {{-- this condition when false then this code execute --}}
    @unless($name == 'Asion')
        <h1>You are not admin {{ $name }}.</h1>
    @endunless

    {{-- When value set this variable then this code execute --}}
    @isset($name)
        <h1>Value is set like {{ $name }}</h1>
    @endisset

    {{-- When value not set this variable then this code execute --}}
    @empty($name)
        <h1>Value is not set.</h1>
    @endempty
    {{-- this code execute when code production --}}
    {{-- @production
        <h1>This code execute when code production level.</h1>
    @endproduction --}}

    {{-- @env('local')
    <h1>This is Local environment.</h1>
    @endenv --}}

    {{-- @env(['local', 'staging'])
    <h1>This is Local and staging environment.</h1>
    @endenv --}}

    {{-- @switch($name)
        @case($name == 'Asion')
            <h1>You are right person {{ $name }}. First case match.</h1>
        @break

        @case($name == 'Asis')
            <h1>You are right person {{ $name }}.Second case match.</h1>
        @break

        @case($name == 'Ashis')
            <h1>You are right person {{ $name }}.Third case match.</h1>
        @break

        @case($name == 'Solver')
            <h1>You are right person {{ $name }}.Fourth case match.</h1>
        @break

        @default
            <h1>You are not right person.No case match.</h1>
    @endswitch --}}

    @for ($i = 0; $i < 10; $i++)
        <h1>{{ $i }}</h1>
    @endfor




</body>

</html>
