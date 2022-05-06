<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination</title>
</head>

<body>

    <h1>This is Pagination Page</h1>


    @foreach ($products as $student)
        <h2>{{ $student->name }}</h2>
        <p>{{ $student->email }}</p>
        <p>{{ $student->id }}</p>
    @endforeach
</body>

</html>
