<div>
    @if(Auth::guest())
    <span class="flex items-center space-x-2">
        <!-- <x-heroicon-o-heart class="w-5 h-5 text-red-300" /> -->
        <!-- <i class="fa fa-heart"></i> -->
        <img src="img/heart1.png" alt="" srcset="" width="20px">
        <span class="text-xs font-bold">{{ count($this->thread->likes()) }}</span>
    </span>
    @else
    <button wire:click="toggleLike" class="flex items-center space-x-2 cursor-pointer">
        <!-- <x-heroicon-o-heart class="w-5 h-5 text-red-300" /> -->
        <i class="fa fa-heart text-blue-500"></i>
        <span class="text-xs font-bold">{{ count($this->thread->likes()) }}</span>
    </button>
    @endif
</div>
