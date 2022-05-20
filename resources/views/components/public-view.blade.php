<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Elisabeth Cibot est une artiste contemporaine et historienne française. Elle a créé des installations, des sculptures, des peintures et des dessins.">

    <title>Elisabeth Cibot - Sculptrice</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('/storage/admin/faviconEC.png') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://kit.fontawesome.com/5fc9c8ed9e.js" crossorigin="anonymous"></script>

    <meta name="keywords" content="Elisabeth Cibot art, art contemporaine, Sculptures, Les Belles, Les Elfes, Camille.S rencontre avec Camille Claudel">

</head>


<body>

    @include('partialsFront.header')
    <main class="body-container">
        {{ $slot }}
    </main>
    @include('partialsFront.footer')
</body>
<script src="{{ asset('js/app.js') }}" defer></script>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</html>