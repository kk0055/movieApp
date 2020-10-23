@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
  <div class="popular-movies">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
          @foreach ($popularMovies as $movie)
      <div class="mt-8">
        <a href="">
          <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="">
        </a>
        <div class="mt-2">
          <a href="" class="text-lg mt-2 hover:text-gray:300">
            {{ $movie['title'] }}</a>
            <div class="flex item-center text-gray-400 text-sm mt-1">
            <span class="mt-1">{{ $movie['vote_average'] }}</span>
            <span class="mx-2">|</span>
            <span class="mt-1">{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d Y') }}</span>

            </div>
        </div>
      </div>

              {{-- <x-movie-card :movie="$movie" /> --}}
          @endforeach

      </div>
  </div> <!-- end pouplar-movies -->

  <div class="now-playing-movies py-24">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
          {{-- @foreach ($nowPlayingMovies as $movie)
              <x-movie-card :movie="$movie" />
          @endforeach --}}
      </div>
  </div> <!-- end now-playing-movies -->
</div>

@endsection