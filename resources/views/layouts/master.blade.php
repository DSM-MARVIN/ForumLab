<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="/image/png" href="/img/milk.png">
    <title>MilkshakeLab</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Slabo+27px|Yesteryear'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Source+Sans+Pro:wght@100&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="\css\main.css">
    @yield('style')

    <!-- 1. Addchat css -->
<link href="{{ asset('assets/addchat/css/addchat.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('#') }}">
                 <img class="logoimg" src="/img/6230173.png" alt="" srcset="" width="30px" height="30px">
                <span class='logo'><span class='milkshake'>Milkshake</span>Lab</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    Left Side Of Navbar
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    Right Side Of Navbar
                    <ul class="navbar-nav ml-auto">
                        Authentication Links
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        </nav> -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <footer>
    <div>
    <ul>
        <div class="list1">
    <!-- <li>
      <p>👋</p>
    </li> -->
    <li><i class="fa fa-twitter"></i><a href="https://twitter.com/julesforrest">Twitter</a></li>
    <li><i class="fa fa-facebook"></i><a href="https://codepen.io/julesforrest">Facebook</a></li>
    <li><i class="fa fa-youtube-play"></i><a href="https://dribbble.com/julesforrest">YouTube</a></li>
        </div>
        <div class="list2">
    <li><a href="mailto:julesforrest@gmail.com">Email</a></li>
    <li><a href="https://github.com/julesforrest">Phone</a></li>
    </div>

  </ul>
</div>
</footer>
<!-- 3. AddChat JS -->
<!-- Modern browsers -->
<script type="module" src="{{asset('assets/addchat/js/addchat.min.js') }}"></script>
<!-- Fallback support for Older browsers -->
<script nomodule src="{{asset('assets/addchat/js/addchat-legacy.min.js') }}"></script>
</body>
</html>
