<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie_showtime extends Model
{
    /** @use HasFactory<\Database\Factories\MovieShowtimeFactory> */
    use HasFactory;
    protected $table = 'movie_showtimes';
}
