<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MoviesController::class, 'index'])
    ->name('home');

Route::get('/filmes/pesquisar', [App\Http\Controllers\MoviesController::class, 'search']);
Route::get('/filme/${movie}', [App\Http\Controllers\MoviesController::class, 'show']);

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

//Route::view('profile', 'profile')
//    ->middleware(['auth'])
//    ->name('profile');

//require __DIR__.'/auth.php';
