<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KoreanController extends Controller
{
    public function index()
    {
     
        
        //APIの呼び出し.services.php→tmdb->token
        $netFlix = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/discover/tv?&with_networks=213')
        ->json()['results'] ;
        
        // dd($netFlix);
       

    return view('netflix.favorite',
    [
        'netFlix' => $netFlix, 
    ]
        );
    }
    }
