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

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
    @include('layouts.header')
    <main>
        <div class="banner text-center p-12 text-white">
            <h1 class="text-4xl pb-4">KHO ĐỀ THI TIẾNG NHẬT</h1>
            <div class="flex flex-row justify-center">
                <div class="data-item pr-7">
                    <span class="text-xl">3930</span> "+" <i class="not-italic">Thành viên</i>
                </div>
                <div class="data-item">
                    <span class="text-xl">999</span> "+" <i class="not-italic">Đề thi</i>
                </div>
            </div>
        </div>
        {{ $slot }}
    </main>
    @include('layouts.footer')
    </body>
</html>
