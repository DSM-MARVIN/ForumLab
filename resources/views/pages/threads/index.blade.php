<x-guest-layout>
    <main class="wrapper">
        <section class="w-full">
            {{-- Sidenavbar --}}

            <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
                {{-- Alerts --}}
                <x-alerts.main />

                @foreach ($threads as $thread)
                <x-thread :thread="$thread" />
                @endforeach

                {{-- Pagination --}}
                <div class="mt-8">
                    {{ $threads->render() }}
                </div>
            </div>

        </section>
    </main>
</x-guest-layout>
