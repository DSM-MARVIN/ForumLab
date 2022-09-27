<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-partials.head />
</head>
<style>
.nav {
  background-color: whitesmoke;
  position: relative;
  margin-top: 30px;
  /* margin-bottom: 10px; */
  font-family: Arial, Helvetica, sans-serif;
  color: #333;
}

.navigation {
  padding: 12px 0 10px 0;
  margin-top: -30px ;
  display: flex;
  list-style: none;
}

.nav-list {
  border-right: 2px lightgray solid;
  padding: 0 4px;
}

</style>
<script type="text/javascript">
  $(document).ready(function() {
    $("#reply").emojioneArea();
  });
</script>
<body class="bg-gray-100">

    {{-- Header --}}
    <nav class="nav">
                <!-- Settings Dropdown -->

<span style="position: absolute; top: 20px; right: 30px"><i class="fa fa-facebook text-blue-500"></i> <span><i class="fa fa-twitter text-blue-500"></i> <span><i class="fa fa-youtube text-red-500"></i></span></span></span>
         <ul class="navigation">
             <li class="nav-list"><a href="/"><img src="/img/4815501.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/view/notes"><img src="/img/3075908.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/question/answer"><img src="/img/2859734.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/chatify"><img src="/img/3930540.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/view/videos"><img src="/img/1179069.png" alt="" width='30px'></a></li>
        </ul>

         </div>
        </nav>
    <!-- <header class="relative flex items-center justify-center h-40 bg-blue-500">
        <img class="absolute z-10 object-cover w-full h-40 opacity-10" src="{{ asset('img/bg/bg-header.jpg') }}" alt="">
        <h2 class="z-50 text-4xl font-bold text-gray-200">Welcome to the community</h2>
    </header> --> 
    {{-- Navbar --}}
    <x-partials.nav />

    {{-- Slot --}}
    <div class="mb-8 font-sans antialiased text-gray-900">
        {{ $slot }}
    </div>

    {{-- Footer --}}
    <x-partials.footer />

    {{-- Blade UI Kit --}}
    {{-- @bukScripts(true) --}}

    {{-- Livewire --}}
    <livewire:scripts />

</body>

</html>
