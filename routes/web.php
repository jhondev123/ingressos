<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MoviesController::class, 'index'])
    ->name('home');

Route::get('/filmes/pesquisar', [App\Http\Controllers\MoviesController::class, 'search'])->name('movies.search');
Route::get('/filme/${movie}', [App\Http\Controllers\MoviesController::class, 'show'])->name('movies.show');
Route::view('/contato', 'contact')->name('contact');


