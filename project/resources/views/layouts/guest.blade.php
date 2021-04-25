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
    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{asset('js/guest.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    @livewireScripts

    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        .container {
            margin: 0 auto;
            max-width: 1280px;
        }

        .flickity-viewport {
            height: 500px !important;
        }
    </style>
</head>
<body class="antialiased bg-gray-200 font-sans" >

<livewire:guest.header/>
<livewire:guest.banner/>

<main></main>










{{--@include('layouts.header')--}}
<main>
    <div class="event-notification-box fixed right-0 top-0 text-white bg-green-400 mt-3 mr-3 px-5 py-3 rounded-sm shadow-lg transform duration-700 opacity-0"></div>
    {{ $slot }}
</main>
@include('layouts.footer')
<script src="{{asset('js/guest.js')}}"></script>
<script>
    function carousel() {
        return {
            active: 0,
            init() {
                var flkty = new Flickity(this.$refs.carousel, {
                    wrapAround: true
                });
                flkty.on('change', i => this.active = i);
            }
        }
    }

    function carouselFilter() {
        return {
            active: 0,
            changeActive(i) {
                this.active = i;

                this.$nextTick(() => {
                    let flkty = Flickity.data( this.$el.querySelectorAll('.carousel')[i] );
                    flkty.resize();

                    console.log(flkty);
                });
            }
        }
    }
</script>
</body>
</html>
