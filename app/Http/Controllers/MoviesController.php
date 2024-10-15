<?php

namespace App\Http\Controllers;

use App\Enum\MovieStatus;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{

    public function index()
    {
        $movies = Movie::query()
            ->latest('release_date')
            ->limit(10)
            ->get();
        return view('home', [
            'movies' => $movies,
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
        //
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
