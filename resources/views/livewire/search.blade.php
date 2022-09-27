<div style=" z-index: 1">
    <div>
    <form wire:submit.prevent="searchTopic">
        <input type="text" wire:model.defer="search" style="position: static; top: 63px; width: 400px " class=" border-none rounded shadow-inner bg-purple-100 focus:ring-blue-200">
        <button type="submit" wire:click="searchTopic" style="position: static; margin: -30px "><i class="fa fa-search text-blue-400"></i></button>
    </form>


<div style="position: fixed; top: 105px ">
@if(isset($search))
    @foreach($titles as $title)
    <a href="{{ route('threads.show', [$title->category->slug(), $title->slug()]) }}" class="space-y-2">
    <p class="py-2 px-4 shadow-sm bg-white hover:text-blue-400" style="width: 400px; ">{{$title->title}}</p>
    <!-- <p class="py-2 px-4 bg-white hover:text-blue-400" style="width: 400px; ">{{$title->body}}</p> -->
    </a>
    @endforeach
    @elseif(isset($search) === null)
    <p></p>
    @else
    <p></p>
@endif
 </div>


</div>
</div>


