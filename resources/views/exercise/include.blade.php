<!DOCTYPE html>
<html lang="en">

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
