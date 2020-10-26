<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PeopleController;

Route::get('/',[MoviesController::class,'index'] )->name('movies.index');
Route::get('/movies/{movie}',[MoviesController::class,'show'] )->name('movies.show');
Route::get('/genres',[MoviesController::class,'genresIndex'] )->name('movies.genre');

Route::get('/people',[PeopleController::class,'index'] )->name('people.index');
Route::get('/people/page/{page}',[PeopleController::class,'index'] );
Route::get('/people/{people}',[PeopleController::class,'show'] )->name('people.show');



