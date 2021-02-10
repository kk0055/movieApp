<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Movie">
  <meta property="og:description" content="Movie">
  <meta name="description" content="find Movies" />

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MovieApp</title>
  <link rel="stylesheet" href="/css/main.css">
  
  <livewire:styles />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="font-sans bg-black text-white ">
  <nav class="border-b border-gray-900">
    <div class="container mx-auto px-4 flex item-center justify-between px-4 py-6">
      <ul class="flex flex-col md:flex-row items-center">
  <li>
    <a href="{{ route('movies.index') }}">
<img src="https://image.flaticon.com/icons/png/512/184/184578.png" class="rounded-full h-16 w-16" alt="homeimg">
  </a>
  </li>
  <a href="{{ route('korean.index') }}" class="hover:text-gray-300">My favorite</a>
</li>


  <li class="md:ml-6 mt-3 md:mt-0">
    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
</li>

{{-- <li class="md:ml-6 mt-3 md:mt-0">
  <a href="" class="hover:text-gray-300">Genres</a>
</li> --}}

<li class="md:ml-6 mt-3 md:mt-0">
    <a href="{{ route('tv.index') }}" class="hover:text-gray-300">TV Shows</a>
</li>
<li class="md:ml-6 mt-3 md:mt-0">
  <a href="{{ route('people.index') }}" class="hover:text-gray-300">Actors</a>
</li>
</ul>

<livewire:search-dropdown>
{{-- <div class="flex flex-col md:flex-row items-center">
  <div class="relative">
<input type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1" placeholder="Search">
</div> 

 
  <div class="md:ml-4 mt-3 md:mt-0">
      <a href="#">
          <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
      </a>
  </div>
</div>--}}

    </div>
     </nav>
  @yield('content')
  <livewire:scripts />
  @yield('scripts')
  <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
</body>
</html>