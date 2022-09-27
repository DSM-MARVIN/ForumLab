<aside class="col-span-1 space-y-6 text-gray-600">

    <div class="p-4 space-y-4 bg-white shadow">
        <div>
            {{-- Start Discusson Button --}}
            <a href="{{ route('threads.create') }}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition bg-gray-400 border rounded hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25" }} style="box-shadow: 4px 4px 1px #95a4ff, 4px 4px 1px 1px #333;border: gray 2px solid">
                {{ __('Whats on your mind ?..') }} <i class="fa fa-paper-plane"></i>
            </a>
        </div>

        @auth
        @if(request()->routeIs('threads.show'))
        <div class="pb-4 space-y-4">

            @can(App\Policies\ThreadPolicy::UNSUBSCRIBE, $thread)
            {{-- Unubscribe to thread button --}}
            <x-links.main href="{{ route('threads.unsubscribe', [$thread->category->slug(), $thread->slug()]) }}">
                {{ __('Unsubscribe to Thread') }}
            </x-links.main>
            <p class="text-sm text-gray-500 ">
                Unsubscribe from this thread.
            </p>

            @elsecan(App\Policies\ThreadPolicy::SUBSCRIBE, $thread)
            {{-- Subscribe to thread button --}}
            <x-links.main href="{{ route('threads.subscribe', [$thread->category->slug(), $thread->slug()]) }}">
                {{ __('Subscribe to Thread') }}
            </x-links.main>
            <p class="text-sm text-gray-500 ">
                Subscribe to this thread.
            </p>
            @endcan

        </div>
        @endif
        @endauth
    </div>

    {{-- Topics --}}
    <div class="p-4 space-y-4 bg-white shadow ">
        <div class="pb-4 mb-4 border-b border-gray-200">
            <h2 class="font-bold uppercase">Topics</h2>
        </div>

        <ul class="space-y-4">
            <li>
                <a href="#" class="flex items-center justify-between">
                Algebra
                    <span class="px-2 text-white bg-green-400 rounded-3xl">123</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                Arithmetic
                    <span class="px-2 text-white bg-green-400 rounded-3xl">45</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                Calculus
                    <span class="px-2 text-white bg-yellow-400 rounded-3xl">63</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                Geometry
                    <span class="px-2 text-white bg-yellow-400 rounded-3xl">5</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                Trigonometry.
                    <span class="px-2 text-white bg-green-400 rounded-3xl">2</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="p-4 space-y-4 bg-white shadow">
        <ul class="space-y-4 text-gray-500">
            <li>
                <a href="#" class="flex items-center space-x-2">
                    <!-- <x-heroicon-o-pencil-alt class="w-5 h-5 text-yellow-500" /> -->
                    <i class="fa fa-comment"></i>
                    <span>Popular this week</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-2">
                    <!-- <x-heroicon-s-fire class="w-5 h-5 text-red-600" /> -->
                    <i class="fa fa-star text-purple-500"></i>
                    <span>Popular all time</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-2">
                    <!-- <x-heroicon-s-chat class="w-5 h-5 text-blue-400" /> -->
                    <i class="fa fa-comment-o"></i>
                    <span>No replies yet</span>
                </a>
            </li>
        </ul>
    </div>


</aside>
