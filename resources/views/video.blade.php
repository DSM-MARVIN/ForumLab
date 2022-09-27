
<!-- @extends('layouts.master') -->

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


         <ul class="navigation">
             <li class="nav-list"><a href="/"><img src="/img/4815501.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/view/notes"><img src="/img/3075908.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/question/answer"><img src="/img/2859734.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/chatify"><img src="/img/3930540.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/view/videos"><img src="/img/1179069.png" alt="" width='30px'></a></li>
        </ul>

         </div>
        </nav>

        <section>
    <div class="container-vid">
    <div class="con-text">
          <h2>Watch and learn</h2>
          <p>Let us get to the visuals, our videos are simple and explainatory videos.You can learn by watching our videos to grasp a better understanding on a topic and later you can try solving math problems yourself. As we try our best in giving you the best content to help you on your learning process and in achieving your goals. Subscribe on our youtube chanel for more content to help the community grow and give us feedback on the comment section.</p>
             <button class="button-yt">Subscribe <i class="fa fa-youtube-play"></i></button>
        </div>
      <div class="main-video">
          <video src=/videos/button.mp4" autoplay muted controls></video>
          <i class='bx bx-x close-vid'></i>
      </div>
      <div class="videos">
        <video src="/videos/welcome.mp4" poster ="/img/thumbnails/welcome-thumbnail.png"></video>
        <i class='bx bx-play-circle'></i>
      </div>
      <div class="videos">
        <video src="/videos/solveX1.mp4" poster ="/img/thumbnails/solveX1-thumbnail.png"></video>
        <i class='bx bx-play-circle'></i>
      </div>
      <div class="videos">
        <video src="/videos/7ways-math.mp4" poster ="/img/thumbnails/7ways-thumbnail.png"></video>
        <i class='bx bx-play-circle'></i>
      </div>
      <div class="videos">
        <video src="/videos/solveX20sec.mp4" poster ="/img/thumbnails/solveX20sec-thumbnail.png"></video>
        <i class='bx bx-play-circle'></i>
      </div>
    </div>
  </section>
        

@endsection