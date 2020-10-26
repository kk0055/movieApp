@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
  <div class="popular-people">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular People</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
          {{-- Foreach start --}}
          @foreach ($popularPeople as $people) 
           <div class="people mt-8">
              {{-- <a href="{{ route('peoples.show', $people['id']) }}"> --}}
                  <img src="{{ $people['profile_path'] }}" alt="profile image" class="hover:opacity-75 transition ease-in-out duration-150">
              </a>
              <div class="mt-2">
                  {{-- <a href="{{ route('peoples.show', $people['id']) }}" class="text-lg hover:text-gray-300">{{ $people['name'] }}</a> --}}
                  {{ $people['name'] }}
                  <div class="text-sm truncate text-gray-400">{{ $people['known_for'] }}</div>
              </div>
          </div>
      @endforeach
    
      </div>
  </div> <!-- end pouplar-people -->
<div class="flex justify-between mt-16">
  @if ($previous)
  <a href="people/page/{{ $previous }}">Previous</a>   
  @endif
  
  @if ($next)
  <a href="people/page/{{ $next }}">Next</a>   
   @endif
  
</div>

</div>

@endsection