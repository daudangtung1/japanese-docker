<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{'css/style.css'}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lib/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lib/slick-theme.css')}}">
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <style>
        .container {
            margin: 0 auto;
            max-width: 1280px;
        }
    </style>
    @livewireScripts

</head>
<body>

{{--<livewire:guest.header/>--}}
{{--@include('layouts.header')--}}
<main>
    {{ $slot }}
</main>
@include('layouts.footer')

<script src="{{asset('js/lib/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/lib/slick.min.js')}}"></script>
<script src="{{asset('js/guest.js')}}"></script>
@livewireScripts

</body>
</html>
