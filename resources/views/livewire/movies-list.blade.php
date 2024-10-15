<div>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Filmes</h1>
            <div>
                <select class="border border-gray-300 rounded px-5 py-2">
                    <option value="desc">Mais recentes</option>
                    <option value="asc">Mais antigos</option>
                </select>
            </div>
            <div>
                <select class="border border-gray-300 rounded px-5 py-2">
                    <option value="desc">Em cartaz</option>
                    <option value="asc">Próximos filmes</option>
                    <option value="asc">Fora de cartaz</option>

                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($movies as $movie)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-56 object-cover object-center" src="{{ $movie['cover'] }}"
                         alt="{{ $movie['title'] }}">
                    <div class="p-4">
                        <h1 class="text-2xl font-bold">{{ $movie['title'] }}</h1>
                        <p class="text-sm text-gray-600">{{ $movie['release_date'] }}</p>
                        <p class="mt-2 text-gray-500"></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
