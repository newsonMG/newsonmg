<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{ asset('ico/fav-nmg.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} - NewsonMG</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark flex-md-nowrap  p-1 shadow-sm">
            <div class="container">
                <a class="navbar-brand mr-0" href="{{ url('/') }}">
                    <img src="{{ asset('png/My-First.png') }}" width="70" height="70" alt="" loading="lazy">
                </a>
                <button class="navbar-toggler position-relative d-md-none collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav px-3 mr-auto">
                        <li class="nav-item text-nowrap active">
                            <a class="nav-link" href="{{ url('/') }}">Acceuil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item text-nowrap">
                            <a class="nav-link" href="{{ route('courses.index') }}">Cours</a>
                        </li>
                        <li class="nav-item text-nowrap">
                            <a class="nav-link" href="#">A Propos</a>
                        </li>
                        <li class="nav-item text-nowrap">
                            <a class="nav-link" href="#">Me Contacter</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav px-3 ml-auto">
                        <!-- Authentication Links -->
                        @auth
                            <li class="nav-item text-nowrap">
                                <a class="nav-link" href="{{ route('courses.create') }}">Créer un cours</a>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item text-nowrap">
                                <a class="nav-link btn btn-outline-primary btn-sm" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item text-nowrap">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profiles.show', auth()->user()->username) }}">Mon profil</a>
                                    <a class="dropdown-item" href="{{ route('home') }}">Tableau de bord</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        <main role="main" class="container flex-shrink-0 mt-4">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @yield('content')
        </main>
    </div>

    <!-- JS, Popper.js, and jQuery -->
</body>
</html>
