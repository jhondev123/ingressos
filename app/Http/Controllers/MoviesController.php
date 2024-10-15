<?php

namespace App\Http\Controllers;

use App\Enum\MovieStatus;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{

    public function index()
    {
        $moviesComingSoon = Movie::query()
            ->where('status', MovieStatus::COMING_SOON)
            ->latest('release_date')
            ->limit(5)
            ->get();

        $moviesNowShowing = Movie::query()
            ->where('status', MovieStatus::NOW_SHOWING)
            ->latest('release_date')
            ->limit(5)
            ->get();

        return view('home', [
            'moviesComingSoon' => $moviesComingSoon,
            'moviesNowShowing' => $moviesNowShowing
        ]);
    }

    public function search()
    {
        $movies_status = array_map(fn($case) => $case->value, MovieStatus::cases());


    }


    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {

        if ($movie->status !== (MovieStatus::NOW_SHOWING)->value) {
            return view('movies.show', [
                'movie' => $movie
            ]);
        }
        // trazer todas as sessões disponíveis para o filme
        // dias e horários

        // trazer as poltronas dispoíveis para o usuário escolher
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
