<section class="relative h-72 bg-indigo-800 flex flex-col justify-center align-center text-center space-y-4 mb-4">
  <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center bg-cover"
    style="background-image: url('https://pixelprowess.com/i/bots/i/group.svg')"></div>

    <!-- <div class="w-full xl:w-1/2 h-screen">
    <img class="object-cover w-full h-screen" src="https://pixelprowess.com/i/bots/i/group.svg" alt="Robot Group">
  </div> -->

  <div class="z-10">
    <h1 class="text-6xl font-bold uppercase text-white">
      Work<span class="text-orange-400">Smart</span>
    </h1>
    <p class="text-2xl text-gray-200 font-bold my-4">
      Find the your dream Job and connect with right people
    </p>
    <div>
      @auth
      @else
      <a href="/register"
        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Sign
        Up</a>
      @endauth
    </div>
  </div>
</section>
