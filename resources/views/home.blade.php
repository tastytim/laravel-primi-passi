@php
$titoloPagina = "Hello World";

@endphp


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    @include("styles");
</head>
<body>
    @include('menu');

    <ul>
    @foreach($lista as $key)
        <li>{{$key}}</li>
    @endforeach
    </ul>
</body>
</html>
