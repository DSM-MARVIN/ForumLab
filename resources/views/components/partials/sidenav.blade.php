<aside class="col-span-1 space-y-1 text-gray-600">

    <div class="space-y-1 side-bg">


        @auth
        @if(request()->routeIs('threads.show'))
        <div class="pb-4 space-y-4">

            @can(App\Policies\ThreadPolicy::UNSUBSCRIBE, $thread)
            {{-- Unubscribe to thread button --}}
            <x-links.main href="{{ route('threads.unsubscribe', [$thread->category->slug(), $thread->slug()]) }}">
                {{ __('Unsubscribe to Thread') }}
            </x-links.main>

            @elsecan(App\Policies\ThreadPolicy::SUBSCRIBE, $thread)
            {{-- Subscribe to thread button --}}
            <x-links.main href="{{ route('threads.subscribe', [$thread->category->slug(), $thread->slug()]) }}">
                {{ __('Subscribe to Thread') }}
            </x-links.main>

            @endcan

        </div>
        @endif
        @endauth
    </div>

    {{-- Topics --}}


</aside>
