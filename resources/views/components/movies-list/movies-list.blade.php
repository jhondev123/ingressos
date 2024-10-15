@props(['movies'])
<div>
    @foreach($movies as $movie)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-56 object-cover object-center" src="{{ $movie['cover'] }}" alt="{{ $movie['title'] }}">
            <div class="p-4">
                <h1 class="text-2xl font-bold">{{ $movie['title'] }}</h1>
                <p class="text-sm text-gray-600">{{ $movie['release_date'] }}</p>
                <p class="mt-2 text-gray-500"></p>
            </div>
        </div>
    @endforeach

</div>
