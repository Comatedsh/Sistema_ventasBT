<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('platilla.name', 'Sistema De Ventas') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!--<a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>-->

                <a href="{{ url('/home') }}"  class="navbar-brand">
                    <img src="{{ asset('img/logo.png') }}" alt="" width="210px">
                </a>

                <a style="margin-left: 800px" class="navbar-brand" href="{{ url('/Compras') }}">
                    {{ config('carrito.name', 'compras') }}
                </a>

                <a class="navbar-brand" href="{{ url('/Lista-de-deseos') }}">
                    {{ config('carrito.nam', 'deseos') }}
                </a>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
