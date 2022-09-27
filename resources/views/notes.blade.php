@extends('layouts.master')

@section('content')
<nav class="nav">
                <!-- Settings Dropdown -->
                <div class="relative ml-3">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                <img class="userport-img object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                    {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>
         <!-- <div class="nav-profile">
         <div class="userport-img"></div>
         <div class="userport-name"></div> -->

         <!-- <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> -->

         <ul class="navigation">
             <li class="nav-list"><a href="/home"><img src="/img/4815501.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/notes"><img src="/img/3075908.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/posts/1"><img src="/img/2859734.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/chatify"><img src="/img/3930540.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/videos"><img src="/img/1179069.png" alt="" width='30px'></a></li>
        </ul>

         </div>
        </nav>

        <div class="wrapper">

<div class="header">
<div class="con-text-notes">
          <h2>Download easy to understand notes</h2>
          <p>This notes are a quick summary of each math topic, this will help you understand the fundamentals of each math topic. With a couple of examples which will give you the jumpstart you need in to solve problems on certain topics. What is really amazing is it is all for free <q>Just click download and start learning</q> We hope you enjoy.</p>
             <button class="button">Support <i class="fa fa-paper-plane"></i></button>
        </div>
</div>

<div class="cards">

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
      <!-- <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span> -->
      <i class="fa"><img src="/img/3408406.png" alt="" srcset="" width='45px'></i>
      <!-- <a class="login" href="#popup1">Download</a> -->

      
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      <!-- Expander -->
      <!-- <samp> 1 + 2x = 4x <br> 0 = -1 +4x -2x <br> 1 = 2x <br> x = 1/2</samp> -->
      <!-- <a class="button" href="#popup1">Download Notes</a> -->
      <!-- <object data="/pdf/php_tutorial.pdf" type="" width='100%'></object> -->
      <!-- <iframe src="/pdf/php_tutorial.pdf" frameborder="0"></iframe> -->
      <embed src="/pdf/php_tutorial.pdf" type="application/pdf" style="height: -webkit-fill-available; width: -webkit-fill-available">

    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <!-- <span><h4 class="header__subtitle"><kbd>number patterns<kbd></h4></span> -->
      <i class="fa"><img src="/img/stickrs/beach.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <!-- <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span> -->
    <i class="fa"><img src="/img/stickrs/caravan.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>
  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <!-- <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span> -->
    <i class="fa"><img src="/img/stickrs/cat.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <!-- <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span> -->
    <i class="fa"><img src="/img/stickrs/bolt.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <!-- <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span> -->
    <i class="fa"><img src="/img/stickrs/cherries.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <!-- <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span> -->
    <i class="fa"><img src="/img/stickrs/cookie.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <!-- <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span> -->
    <i class="fa"><img src="/img/stickrs/pizza.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <!-- <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span> -->
    <i class="fa"><img src="/img/stickrs/rainbow.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

</div>

</div>

        <div id="popup1" class="overlay">
	<div class="popup popup-que">
		<h2>Hello Notes</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			           <!-- <img src="/img/thumbnails/solveX1-thumbnail.png" alt="" srcset="" width="100%"> -->
      <!-- <embed src="/pdf/php_tutorial.pdf" type="application/pdf" style="height: -webkit-fill-available; width: -webkit-fill-available"> -->
      <!-- <iframe src="/pdf/php_tutorial.pdf" frameborder="0"></iframe> -->
      <object data="/pdf/php_tutorial.pdf" type="" width='100%' height="100%"></object>

		</div>
	</div>
</div>

<div class="container">
       <div class="que card">
           <!-- <img src="/img/thumbnails/solveX1-thumbnail.png" alt="" srcset="" width="400px"> -->
           <div class="box">
            <a class="login" href="#popup1">See Question</a>
           </div>
       </div>
@endsection