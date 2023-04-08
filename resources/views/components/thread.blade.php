<article class="p-5 shadow article-bg relative card-thread border-b-4 border-gray-200 rounded-md " >

    <div class="relative grid grid-cols-6 gap-2">



        {{-- Content --}}
        <div class="col-span-6 space-y-4">

        {{-- Avatar --}}
        <div class=" align-item-left relative">
        <span class="text-xs text-gray-500 absolute top-1 left-12 pl-2">{{ $thread->created_at->diffForHumans() }}</span>
            <x-user.avatar :user="$thread->author()" class="user-img"/>
        </div>

            <a href="{{ route('threads.show', [$thread->category->slug(), $thread->slug()]) }}" class="space-y-2">
                <h2 class="text-md lg:text-lg font-semibold tracking-wide hover:text-blue-400 text-blue-500">
                    {{ $thread->title() }}
                </h2>
                <p class=" text-sm lg:text-md text-gray-600 thread-p">
                    {{ $thread->excerpt() }}
                </p>
            </a>

            {{-- Indicators --}}
            <div class="flex space-x-3">

                {{-- Likes Count --}}
                <div class="flex items-center space-x-2">
                    <x-heroicon-o-heart class="w-6 h-6 text-blue-400 border-2 border-gray-200 rounded-lg " />
                    <!-- <i class="fa fa-heart text-blue-500"></i> -->
                    <span class="text-xs text-gray-500">{{ count($thread->likes()) }}</span>
                </div>

                {{-- Comments Count --}}
                <div class="flex items-center space-x-2">
                    <!-- <x-heroicon-o-chat-alt class="w-4 h-4 text-green-300" /> -->
                    <i class="fa fa-comment" style="color: #f2c562"></i>
                    <span class="text-xs text-gray-500">{{ count($thread->replies()) }}</span>
                </div>

                {{-- Views Count --}}
                <div class="flex items-center space-x-2">
                    <!-- <x-heroicon-o-eye class="w-4 h-4 text-blue-300" /> -->
                    <i class="fa fa-eye text-gray-500"></i>

                    <span class="text-xs text-gray-500">{{ views($thread)->count() }}</span>
                </div>

                {{-- Post Date --}}
                <div class="flex items-center space-x-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <!-- <span class="text-xs text-gray-500">{{ $thread->created_at->diffForHumans() }}</span> -->
                </div>

                {{-- Tags --}}
        <div class="lex items-center space-x-2">
            <div class="flex space-x-2">
                <div class="p-1 text-xs text-white bg-gray-300 rounded-md">
                {{$thread->category->name()}}

                </div>
            </div>
        </div>


            </div>
        </div>


    </div>
</article>


