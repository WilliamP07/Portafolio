<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'William P.') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>


    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/code-slash.svg') }}">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm navbar-menu">
            <div class="container">
                <a class="navbar-brand nav-text" href="{{ url('/') }}">
                    {{ 'WILLIAM P.' }}
                </a>
              
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="bi bi-grid-fill uil-size uil-app "></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto nav-list grid">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link nav__link"  href="{{ url('/') }}"><i class="uil-size bi bi-house-door-fill"></i>{{ __('Inicio') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav__link " href="{{ url('/about') }}"><i class="uil-size bi bi-person-fill"></i>{{ __('Sobre mí') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav__link " href="{{ url('/skills') }}"><i class="uil-size bi bi-file-earmark-code-fill"></i>{{ __('Habilidades') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav__link " href="{{ url('/services') }}"><i class="uil-size bi bi-briefcase-fill"></i>{{ __('Servicios') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav__link " href="{{ url('/portfolio') }}"><i class="uil-size bi bi-image-fill"></i>{{ __('Portafolio') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav__link " href="{{ url('/contact') }}"><i class="uil-size bi bi-envelope-fill"></i>{{ __('Contacto') }}</a>
                            </li>
                           
                            {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif --}}

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-4 bg-white">
            @yield('content')
        </main>

        <footer class="bg-footer footer m-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-sm-4 pt-4 pb-2 responsive-m">
                        <h1 class="text-footer">William P.</h1>
                        <p class="mb-0 text-footer">FrontEnd - BackEnd Developer</p>
                    </div>
                    <div class="col-12 col-md-4 col-sm-8 pt-3 pb-1 responsive-m">
                        <div class="row">
                            <div class=" col-md-4 col-sm-4"><a class="nav-link text-footer p-0 pt-1 pb-1" href="{{ url('/services') }}">Servicios</a></div>
                            <div class=" col-md-4 col-sm-4"><a class="nav-link text-footer p-0 pt-1 pb-1" href="{{ url('/portfolio') }}">Portafolio</a></div>
                            <div class=" col-md-4 col-sm-4"><a class="nav-link text-footer p-0 pt-1 pb-1" href="{{ url('/contact') }}">Contacto</a></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-4 pt-3 pb-1 responsive-m align-icon">
                        <div class="row">
                            <div class="col-1 col-md-3 col-sm-3 p-0"><a class="nav-link text-footer icon-size p-icon" href="https://www.facebook.com/William.PinedaT" target="_blank"><i class="bi bi-facebook"></i></a></div>
                            <div class="col-1 col-md-3 col-sm-3 p-0"><a class="nav-link text-footer icon-size p-icon" href="https://www.instagram.com/william07_z/?hl=es-la" target="_blank"><i class="bi bi-instagram"></i></i></a></div>
                            <div class="col-1 col-md-3 col-sm-3 p-0"><a class="nav-link text-footer icon-size p-icon" href="https://twitter.com/WillPineda18" target="_blank"><i class="bi bi-twitter"></i></a></div>
                            <div class="col-1 col-md-3 col-sm-3 p-0"><a class="nav-link text-footer icon-size p-icon" href="https://www.youtube.com/channel/UCG_C-Rz3EPxsjlojS0VZuuA/featured" target="_blank"><i class="bi bi-youtube"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="pt-4 pb-2">
                    <p class="text-center text-footer-copy mb-0">
                      &copy; 2022 Todos Los Derechos Reservados | William Pineda
                    </p>
                </div>
            </div>
        </footer> 
    </div>
</body>
</html>
