<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Component</title>
    <style>
        .defaultClass {
            color: red;
        }

    </style>

</head>

<body>
    <h1>This is Component Page.</h1>
    <hr>
    @php
        $itemsNo = 'Total item 3';
    @endphp
    <x-card title="Card Title 1" sub-title="Card Subtitle 1" description="Card Description 1" :itemsNo=$itemsNo
        class="cAttributes" />
    <x-card title="Card Title 2" sub-title="Card Subtitle 2" description="Card Description 2" :itemsNo=$itemsNo />
    <x-header.header />
</body>

</html>
