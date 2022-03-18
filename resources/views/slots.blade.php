<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slot</title>
</head>

<body>
    <h1>This is Slot Page</h1>
    <hr>

    <x-alert>
        <span>This is span Tag.</span>
        <x-slot name='title'>Alert Title</x-slot>
    </x-alert>
</body>

</html>
