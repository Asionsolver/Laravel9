<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data</title>
</head>

<body>
    <h1>Student Information Database</h1>
    @foreach ($students as $stu)
        {{ $stu->id }}

        {{ $stu->name }}

        {{ $stu->email }}

        {{ $stu->city }}
        <br>
    @endforeach
</body>

</html>
