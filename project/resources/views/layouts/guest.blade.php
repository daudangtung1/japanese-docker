<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
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
    <script src="{{asset('js/lib/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/lib/slick.min.js')}}"></script>
    <script src="{{asset('js/guest.js')}}"></script>

    @livewireScripts

    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        .container {
            margin: 0 auto;
            max-width: 1280px;
        }

        .h-36-r{
            height: 36rem;
        }

        .slick-prev:before, .slick-next:before {
            color:red !important;
            height: 50px;
            width: 50px;
        }

        .slick-prev{
            left: 430px;
            z-index: 9999;
        }

        .slick-next{
            right: 430px;
            z-index: 9999;
        }

        .slick-slide:not(.slick-current) {
            opacity: 0.4;
        }

        .slick-prev:before{
            content: '<'
        }

        .slick-next:before{
            content: '>';
        }
    </style>
</head>
<body>

<livewire:guest.header/>
{{--@include('layouts.header')--}}
<main>
    <div class="event-notification-box fixed right-0 top-0 text-white bg-green-400 mt-3 mr-3 px-5 py-3 rounded-sm shadow-lg transform duration-700 opacity-0"></div>
    {{ $slot }}
</main>
@include('layouts.footer')
@livewireScripts

</body>
<script>
    window.addEventListener('event-notification', event => {
        alert('Event', event.detail.eventName)
    });
</script>
</html>
