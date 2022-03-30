<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registation Page</title>
</head>

<body>
    {{-- <form action="" method="post">
        @csrf
        Name: <input type="text" name="name" id="name"><br>
        Email: <input type="email" name="email" id="email"><br>
        Password: <input type="password" name="password" id="password"><br>
        <input type="submit" value="Submit">
    </form> --}}

    {{-- @if ($errors->any())
        {{ $errors }}
    @endif --}}

    {{-- Retrieving all error messages for all field --}}
    {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $message)
                <li><span style="color: #e41919">{{ $message }}</span></li>
            @endforeach
        </ul>

        @endif --}}

    {{-- Retrieving all error messages for a field --}}
    {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->get('password') as $message)
                <li><span style="color: #e41919">{{ $message }}</span></li>
            @endforeach
        </ul>

    @endif --}}

    {{-- Retrieving first error messages for a Field --}}

    {{-- @if ($errors->any())
        <ul>
            <li><span style="color: #e41919">{{ $errors->first('password') }}</span></li>
        </ul>
    @endif --}}

    {{-- Determining if messages exist for a field --}}

    {{-- @if ($errors->any())
        <ul>
            <li><span style="color: #e41919">
                    @if ($errors->has('password'))
                        <h1>Error Must be Filled or Less than 8 Character.</h1>
                    @endif
                </span></li>
        </ul>
    @endif --}}


    <form action="" method="post">
        @csrf
        Name: <input type="text" name="name" id="name" value="{{ old('name') }}"><br>

        {{-- error Directive --}}
        @error('name')
            {{ $message }} <br>
        @enderror
        Email: <input type="email" name="email" id="email" value="{{ old('email') }}"><br>

        Password: <input type="password" name="password" id="password" value="{{ old('password') }}"><br>

        {{-- error Directive --}}
        @error('password')
            {{ $message }} <br>
        @enderror
        <input type="submit" value="Submit">
    </form>

    @if (isset($data))
        @foreach ($data as $item)
            {{ $item }}
        @endforeach

    @endif

</body>

</html>
