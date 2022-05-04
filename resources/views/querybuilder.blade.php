<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Query Builder</title>
</head>

<body>
    {{-- @foreach ($users as $students)
        <h4><strong>Id: </strong>{{ $students->id }}</h4>
        <h4><strong>Name: </strong>{{ $students->name }}</h4>
        <h4><strong>Email: </strong>{{ $students->email }}</h4>
        <h4><strong>City: </strong>{{ $students->city }}</h4>
        <h4><strong>Marks: </strong>{{ $students->marks }}</h4>
        <h4><strong>Merit: </strong>{{ $students->Merit }}</h4>
        <br>
    @endforeach --}}

    {{-- For Single Object --}}
    <h4><strong>Id: </strong>{{ $users->id }}</h4>
    <h4><strong>Name: </strong>{{ $users->name }}</h4>
    <h4><strong>Email: </strong>{{ $users->email }}</h4>
    <h4><strong>City: </strong>{{ $users->city }}</h4>
    <h4><strong>Marks: </strong>{{ $users->marks }}</h4>
    <h4><strong>Merit: </strong>{{ $users->Merit }}</h4>

</body>

</html>
