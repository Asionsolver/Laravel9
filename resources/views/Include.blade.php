<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include System</title>
</head>

<body>
    <h1>Welcome to {{ $name }} our Include Page.</h1>
    <h3>This page show our user {{ $name }} profile details.</h3>
    <hr>
    {{-- @include('admin.contact', ['pincode' => 54654654654]) --}}
    {{-- @includeif('admin.contact', ['pincode' => 54654654654]) --}}
    {{-- @includeWhen($userType, 'admin.contact', ['pincode' => 54654654654]) --}}


    {{-- @foreach ($students as $stu)
        @include('admin.students')
    @endforeach --}}

    {{-- or --}}

    {{-- @each('admin.students', $students, 'stu') --}}
    {{-- @each('admin.students', $students, 'stu','admin.noStudents') --}}

    @once
        <h5>It will be evaluated once per rendering cycle.</h5>
    @endonce

    {{-- @forelse ($students as $stu)
        <h1>{{ $stu }}</h1>
    @empty
        <h1>No Students</h1>
    @endforelse --}}
    @includeUnless(!$userType, 'admin.contact', ['pincode' => 54654654654])

</body>

</html>
