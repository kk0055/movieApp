<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\KoreanController;

Route::get('/',[MoviesController::class,'index'] )->name('movies.index');
Route::get('/movies/{id}',[MoviesController::class,'show'] )->name('movies.show');
Route::get('/genres',[MoviesController::class,'genresIndex'] )->name('movies.genre');

Route::get('/people',[PeopleController::class,'index'] )->name('people.index');
Route::get('/people/page/{page}',[PeopleController::class,'index'] );

Route::get('/people/{id}',[PeopleController::class,'show'] )->name('people.show');


Route::get('/tv',[TvController::class,'index'] )->name('tv.index');
Route::get('/tv/{id}',[TvController::class,'show'] )->name('tv.show');

Route::get('/favorite',[KoreanController::class,'index'] )->name('korean.index');