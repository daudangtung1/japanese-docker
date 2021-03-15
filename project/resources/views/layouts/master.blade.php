<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{'css/app.css'}}">
    <link rel="stylesheet" href="{{'css/style.css'}}">
    <title>@yield('title')</title>
</head>
<body>
@include('layouts.header')
<main>
    <div class="banner"></div>
    @yield('main')
</main>
@include('layouts.footer')
</body>
</html>
