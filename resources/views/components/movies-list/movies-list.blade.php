@props(['moviesComingSoon', 'moviesNowShowing'])

<div class="container mx-auto px-4 lg:px-8 py-12">
    <!-- Filmes em Cartaz -->
    <div class="space-y-8">
        <h2 class="text-3xl text-center font-bold text-gray-900 mb-6">{{__('Movies in Now Showing')}}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($moviesNowShowing as $movie)
                <x-movies-list.card-movie :movie="$movie"/>
            @endforeach
        </div>
    </div>

    <!-- Filmes em Breve -->
    <div class="space-y-8 mt-12">
        <h2 class="text-3xl text-center font-bold text-gray-900 mb-6">{{__('Movies in Coming Soon')}}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($moviesComingSoon as $movie)
                <x-movies-list.card-movie :movie="$movie"/>
            @endforeach
        </div>
    </div>
</div>
