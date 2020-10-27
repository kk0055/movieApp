<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TvViewModel extends ViewModel
{
  
    public $popularTv;
    public $topRatedTv;
    public $genresArray;

    public function __construct($popularTv,$topRatedTv,$genresArray)
    {
        $this->popularTv = $popularTv;
        $this->topRatedTv = $topRatedTv;
        $this->genresArray = $genresArray;
    }

    public function popularTv()
    {
      return $this->formatTv($this->popularTv);
    }

    //formatTvメソッドで作ったデータをtopRatedTvメソッドに流し入れる
    public function topRatedTv()
    {
        return $this->formatTv($this->topRatedTv);
    }

    public function genresArray()
    {
        return collect($this->genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }

    private function formatTv($tv)
    {
        return collect($tv)->map(function($tvshow) {
            $genresFormatted = collect($tvshow['genre_ids'])->mapWithKeys(function($value) {
                return [$value => $this->genresArray()->get($value)];
            })->implode(', ');

            return collect($tvshow)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$tvshow['poster_path'],
                'vote_average' => $tvshow['vote_average'] * 10 .'%',
                'first_air_date' => Carbon::parse($tvshow['first_air_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
            ])->only([
                'poster_path', 'id', 'genre_ids', 'name', 'vote_average', 'overview', 'first_air_date', 'genres',
            ]);
        });
    }
}