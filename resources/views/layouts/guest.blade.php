<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Survei Tahunan Migas') }}</title> --}}

    <title>Survei Tahunan Migas</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="bg-opacity-25">
    <div class="font-sans text-gray-900 antialiased">
        <div style="opacity: 100%">
            {{ $slot }}
        </div>
    </div>
</body>

<style>
    body {
        background: black
    }

    body:before {
        background-size: 100%;
        content: "";
        position: absolute;
        z-index: -1;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: url('images/bglogin.jpg') center center;
        opacity: .3;
    }

</style>

</html>
