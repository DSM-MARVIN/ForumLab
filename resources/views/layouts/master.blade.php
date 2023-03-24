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
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada&display=swap" rel="stylesheet"> 
        <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- <link rel="stylesheet" href="\css\main.css"> -->
    @yield('style')

    <!-- 1. Addchat css -->
<link href="{{ asset('assets/addchat/css/addchat.min.css') }}" rel="stylesheet">
<style>


.nav {
  background-color: #182842;
  position: relative;
  margin-top: 30px;
  /* margin-bottom: 10px; */
  font-family: Arial, Helvetica, sans-serif;
  color: #333;
}

.navigation {
  padding: 12px 0 10px 0;
  margin-top: -30px ;
  display: flex;
  list-style: none;
}

.nav-list {
  /* border-right: 2px lightgray solid; */
  padding: 0 4px;
}

</style>
</head>
<body>
{{-- Header --}}
<nav class="nav">
                <!-- Settings Dropdown -->
<span style="position: absolute; top: 20px; right: 30px"><i class="fa fa-facebook scl-link"></i> <span><i class="fa fa-twitter scl-link"></i> <span><i class="fa fa-youtube scl-link"></i></span></span></span>
         <ul class="navigation">
         <!-- <li class="nav-list"><a href="/"><i class="fa fa-home fa-nav"></i></a></li> -->
             <li class="nav-list"><a href="/"><img src="https://i.postimg.cc/L8zxQBhv/live.png" alt="" width='35px' class="nav-bg-cl"></a></li>
             <li class="nav-list"><a href="/view/notes"><i class="fa fa-pencil fa-nav"></i></a></li>
             <li class="nav-list"><a href="/question/answer"><img src="https://i.postimg.cc/vmb3JgVy/message.png" alt="" width='30px' class=".fa-nav-ot"></a></li>
             <!-- <li class="nav-list"><a href="/chatify"><i class="fa fa-pencil fa-nav"></i></a></li> -->
             <li class="nav-list"><a href="/view/videos"><img src="https://i.postimg.cc/JnggC78Q/video.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/view/settings"><img src="https://i.postimg.cc/v84Fqkyz/setting.png" alt="" width='30px'></a></li>
        
            </ul>
         </div>
        </nav>
        {{-- Navbar --}}
    <!-- <x-partials.nav /> -->
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

    {{-- Footer --}}
    <x-partials.footer />
<!-- 3. AddChat JS -->
<!-- Modern browsers -->
<script type="module" src="{{asset('assets/addchat/js/addchat.min.js') }}"></script>
<!-- Fallback support for Older browsers -->
<script nomodule src="{{asset('assets/addchat/js/addchat-legacy.min.js') }}"></script>
</body>
</html>
