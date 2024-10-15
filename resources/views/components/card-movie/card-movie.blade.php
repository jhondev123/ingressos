@php use Carbon\Carbon; @endphp
@props(['movie'])

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full px-4 lg:px-8">
        <div
            class="bg-white shadow-xl rounded-lg overflow-hidden w-full max-w-7xl mx-auto ">
            <img class="w-full object-cover object-center" src="{{asset('img/banner_filme.png')}}"
                 alt="{{ $movie['name'] }}"
                 style="height: 800px; object-fit: cover; object-position: center;"
            >
            <div class="p-8">
                <h1 class="text-3xl font-bold text-gray-900 hover:text-indigo-600 transition-colors duration-200">{{ $movie['name'] }}</h1>
                <p class="text-sm text-gray-500">{{ Carbon::parse($movie['release_date'])->format('d M, Y') }}</p>
                <p class="mt-4 text-gray-700 leading-relaxed">{{ Str::limit($movie['synopsis'], 150) }}</p>
                <div class="mt-6">
                    <a href="#"
                       class="inline-block px-4 py-2 bg-indigo-600 text-white font-semibold rounded-lg shadow hover:bg-indigo-700 transition-colors duration-200">
                        Ver Mais
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
