@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
  <div class="popular-movies">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
          {{-- Foreach start --}}
          
          @foreach ($genresArray as $genre)

        
          <a href="https://api.themoviedb.org/4/list/{{ $genre['id'] }}">
          {{ $genre['name'] }}
          </a>
  
     {{-- <x-movie-card :movie="$movie" :genres="$genres" /> --}}
     
          @endforeach

      </div>
  </div> <!-- end pouplar-movies -->


</div>

@endsection