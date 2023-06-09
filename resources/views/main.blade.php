<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/css/media.css', 'resources/js/script.js'])
    </head>
    <body>
        @include('header')
        @yield('content')
        @include('footer')
    </body>
</html>