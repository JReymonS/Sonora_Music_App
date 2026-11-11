<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo', 'Sonora')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400&family=Manrope:wght@400;500;700;800&display=swap">
    <link rel="icon" type="logos/svg" href="{{ asset('logos/sonora-mark-dark.svg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('contenido')
</body>

</html>
