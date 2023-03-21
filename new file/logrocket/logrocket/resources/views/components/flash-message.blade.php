@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-green-500 shadow-md text-white px-4 py-2 rounded-2xl">
  <p>
    {{session('message')}}
  </p>
</div>
@endif