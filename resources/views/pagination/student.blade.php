<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <h1>This is Pagination Page</h1>


    @foreach ($products as $student)
        <h2>{{ $student->name }}</h2>
        <p>{{ $student->email }}</p>
        <p>{{ $student->id }}</p>
    @endforeach

    {{-- link pagination --}}
    {{ $products->links() }}
</body>

</html>
