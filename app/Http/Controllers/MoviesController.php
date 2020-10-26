<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //APIの呼び出し.services.php→tmdb->token
        $popularMovies = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular')
        ->json()['results'] ;

        $voteAverage = collect($popularMovies )->sortByDesc('vote_average');

    

        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/now_playing')
        ->json()['results'] ;
   
        $genresArray = Http::withToken(config('services.tmdb.token'))
       ->get('https://api.themoviedb.org/3//genre/movie/list')
        ->json()['genres'] ;

       
//mapWithKeys...map で処理をかけた結果を連想配列形式で集計
   $genres = collect($genresArray)->mapWithKeys(function ($genre){
    
    return [$genre['id'] => $genre['name']];
   });


    //    dump($nowPlayingMovies );
        return view('movies.index',[
            'popularMovies' => $voteAverage,
            'nowPlayingMovies' => $nowPlayingMovies,
            'genres' => $genres
        ]
            );
    }

  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
        ->json() ;
       
        // dump($movie);
        return view('movies.show',[
            'movie' => $movie
        ]);
    }

   
    public function genresIndex()
    {
    
        $genresArray = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3//genre/movie/list')
         ->json()['genres'] ;
 
         $genres = collect($genresArray)->mapWithKeys(function($genre){
             return [$genre['id'] => $genre['name']];
         });
        //  $genresArray = Http::get('https://api.themoviedb.org/3//genre/movie/list?api_key=d6740c05277a191b9dcf6fa822113d52');
        //  $genresArray->json(); 
//    dump($genresArray);
 
//    $genres = collect($genresArray)->mapWithKeys(function ($genre){
    
//    return [$genre['id'] => $genre['name']];
//    });
        
        // dump($genresArray);
        dump($genres); 

        return view('movies.genres',[
     
            'genresArray' => $genresArray
       ]
           );
  }

   
    


      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
