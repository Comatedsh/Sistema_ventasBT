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

    <style>
        .caja{
            border: solid 1px rgb(71, 70, 70);
        width: 453px;
        position: relative;
        height: 228px;
        display: inline-flex;
        margin-top: -3px;
        border-radius: 12px;
        margin-left: 16px;
        margin-top: 12px;
        }
        .caja:hover{
            border: solid 5px rgb(71, 70, 70);
            width: 460px;
            height: 230px;
        }
        .redic{
            display: contents;
            border: solid 1px black;
        }
        .imagen{
            border-radius: 12px;
        }
        </style>
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

                <a style="margin-left: 700px" class="navbar-brand" href="{{ url('/Ofertas') }}">
                    {{ config('platilla.name', 'Ofertas') }}
                </a>

                <a class="navbar-brand" href="{{ url('/Modas') }}">
                    {{ config('platilla.nam', 'Moda') }}
                </a>

                <a class="navbar-brand" href="{{ url('/Descuentos') }}">
                    {{ config('platilla.nam', 'Descuento') }}
                </a>

                <a class="navbar-brand" href="{{ url('/Compras') }}">
                    {{ config('carrito.nam', 'Carrito') }}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio de sesion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre_usuario }}<!--aqui es el nobre de quien inicia sesion-->
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/perfil') }}">
                                        {{ config('platilla.nam', 'Perfil de usuario') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
