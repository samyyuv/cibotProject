<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Elisabeth Cibot</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://kit.fontawesome.com/5fc9c8ed9e.js" crossorigin="anonymous"></script>

</head>


<body>

    @include('partialsFront.header')
    <main class="body-container">
        {{ $slot }}
    </main>
    @include('contactMe')
    @include('partialsFront.footer')
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</html>