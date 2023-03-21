@props(['listing'])

<x-card class="p-5 pr-10 bg-gray-50 rounded-xl w-full views relative">
  <div class="flex ">
    <img class="hidden -mt-2 md:block absolute right-3 " width="30px" height="30px"
      src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/laravel-logo.png')}}" alt="" />
    <div>
      <h3 class="text-lg text-gray-700">
        <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
      </h3>
      <div class="text-md font-bold mb-4 text-gray-800">{{$listing->company}}</div>
      <x-listing-tags :tagsCsv="$listing->tags" />
      <div class="text-md mt-4">
        <i class="fa-solid fa-location-dot text-green-500"></i> {{$listing->location}}
      </div>
    </div>
  </div>
</x-card>