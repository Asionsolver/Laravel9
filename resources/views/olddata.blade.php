<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Old Data Redirect Page</title>
</head>

<body>
    <h1>Welcome To Old Data Redirect Page.</h1>
    <hr>
    <form action="" method="post">
        @csrf
        Name: <input type="text" name="name" id="name" value="{{ old('name') }}"><br>
        Email: <input type="email" name="email" id="email" value="{{ old('email') }}"><br>
        Password: <input type="password" name="password" id="password" value="{{ old('password') }}"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
