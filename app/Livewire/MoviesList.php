<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Attributes\Computed;
use Livewire\Component;

class MoviesList extends Component
{

    public array $movie_status = ['now_showing', 'coming_soon', 'finished'];
    public string $status = 'now_showing';
    public string $orderBy = 'desc';

    #[Computed]
    public function movies()
    {
        return Movie::where('status', $this->status)
            ->orderBy('release_date', $this->orderBy)
            ->get();

    }
    public function render()
    {
        return view('livewire.movies-list', [
            'movies' => $this->movies(),
        ]);
    }
}
