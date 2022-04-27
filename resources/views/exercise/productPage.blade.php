<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Page</title>
</head>

<body>
    <h1> Welcome to our {{ $websiteName }} Product Page.</h1>
    <hr>
    {{-- @include('exercise.productList') --}}
    {{-- @includeIf('exercise.productList') --}}
    {{-- includeWhen is true then execute --}}
    @includeWhen($userType, 'exercise.productList')
    {{-- includeUnless is fasle then execute --}}
    {{-- @includeUnless($userType, 'exercise.productList') --}}
</body>

</html>
