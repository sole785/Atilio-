<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Atilio') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <!--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">-->
            <div class="container">
               <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Atilio D') }}
                </a> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>-->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                 

                    <!-- Right Side Of Navbar -->
                    <!---  <ul class="navbar-nav ml-auto">  -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                           <!-- <li class="nav-item">-->
                           

                            <li class="nav-item active">    
                                <a class="nav-link" href="{{route('products')}}" title=""><strong>Productos</strong></a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('login') }}" title=""><strong>Ingresar</strong></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('register') }}" title=""><strong>Registrarme</strong></a>
                            </li>
                        @else


                            @if(Auth::user()->type == 'admin')
                                <li class="nav-item active">    
                                    <a class="nav-link" href="{{route('importar')}}" title=""><strong>Cargar Archivo</strong></a>

                                </li>
                            @endif


                            <li class="nav-item active">
                                
                                <a class="nav-link" href="{{route('products')}}" title=""><strong>Productos<strong></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <strong> {{ Auth::user()->name }}<strong> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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

        <footer>
            <div style="height:3rem; width:100%; background-color: black">
                <h3 style="color:white; text-align: center; line-height: 3rem">Todos los derechos reservados Atilio Dominguez.</h3>
            </div>
        </footer>

    </div>
</body>
</html>
