<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- CSS -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
   

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src={{ asset('img/shalan_logo.png') }} alt="shalan" class="menuTopIcon">
                </a>
                <a href="{{ url('/home') }}">
                    <img src={{ asset('img/homebutton_negate.png') }} alt="Home" class="menuIcon" id="img1-before">
                    <img src={{ asset('img/homebutton.png') }} alt="Home" class="menuIcon" id="img1-after">
                </a>
                 <a href="">
                    <img src={{ asset('img/calenderbutton_negate.png') }} alt="Message" class="menuIcon" id="img2-before">
                    <img src={{ asset('img/calenderbutton.png') }} alt="Message" class="menuIcon" id="img2-after">
                </a>
                <a href="">
                    <img src={{ asset('img/messagebutton_negate.png') }} alt="Calender" class="menuIcon" id="img3-before">
                    <img src={{ asset('img/messagebutton.png') }} alt="Calender" class="menuIcon" id="img3-after">
                </a>
                <a href="">
                    <img src={{ asset('img/mypagebutton_negate.png') }} alt="Mypage" class="menuIcon" id="img4-before">
                    <img src={{ asset('img/mypagebutton.png') }} alt="Mypage" class="menuIcon" id="img4-after">
                </a>
                <div class="navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
