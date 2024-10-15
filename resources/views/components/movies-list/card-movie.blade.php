@php use Carbon\Carbon; @endphp
@props(['movie'])
<div
    class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform duration-300 ease-in-out">
    <img class="w-full h-80 object-cover object-center" src="{{asset('img/banner_filme.png')}}"
         alt="{{ $movie['name'] }}">
    <div class="p-6">
        <h1 class="text-2xl font-bold text-gray-800">{{ $movie['name'] }}</h1>
        <p class="text-sm text-gray-500">{{ Carbon::parse($movie['release_date'])->format('d M, Y') }}</p>
        <p class="mt-4 text-gray-600 leading-relaxed">{{ Str::limit($movie['synopsis'], 100) }}</p>
        <div class="mt-4">
            <a href="{{route('movies.show',$movie)}}" class="text-indigo-500 hover:text-indigo-700 font-semibold">
                Mais detalhes</a>
        </div>
    </div>
</div>
