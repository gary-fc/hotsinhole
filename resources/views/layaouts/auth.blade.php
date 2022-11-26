<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, virtual-keyboard=overlays-content">
    <title>Hotsinhole - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="https://www.w3schools.com/favicon.ico">

    <link href="{{ asset('css/app.css') }}?t={{ time() }}" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
@include('shared.header_auth')

@yield('content')

@include('shared.footer_auth')
</body>
</html>
