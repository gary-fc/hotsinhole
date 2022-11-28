<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, virtual-keyboard=overlays-content">
    <meta name="theme-color" content="#FF655B"/>
    <link rel="icon" type="image/x-icon" href="https://www.w3schools.com/favicon.ico">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Css -->
    <link href="{{ asset('css/app.css') }}?t={{ time() }}" rel="stylesheet" type="text/css">
    <!-- Recaptcha -->
    <script src="https://js.hcaptcha.com/1/api.js?hl=en" async defer></script>

    <title>Hotsinhole - @yield('title')</title>
</head>
<body>
@include('shared.headers.header_auth')

@yield('content')

@include('shared.footers.footer_auth')
</body>
</html>
