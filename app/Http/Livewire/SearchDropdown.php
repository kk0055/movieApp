<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{

    
        public  $search = '';

    public function render()
    {
         $searchResults = [];

         if (strlen($this->search) >= 2 ) {

            //searchされた文字を含む結果をGet
            $searchResults = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/search/tv?query='.$this->search)
            ->json()['results'] ;
         }
       
       

        //  dump($searchResults);

        return view('livewire.search-dropdown',[
            'searchResults' => collect($searchResults)->take(7),
        ]);
    }
}
