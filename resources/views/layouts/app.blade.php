<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Comics</title>

    <!-- Fonts -->


    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body>
    @include('partials.header')
    @include('partials.jumbotron')
    <main>
        @yield('content')
        @include('partials.icon-list')
    </main>
    <footer>
        @include('partials.footer-top')
        @include('partials.footer-bottom')
    </footer>

</body>

</html>
