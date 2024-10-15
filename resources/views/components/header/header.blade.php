@props([])

<header class="bg-gray-800 text-white">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <a href="{{route('home')}}" class="text-xl font-bold">Logo</a>
                <nav class="ml-10">
                    <ul class="flex space-x-4">
                        <li><a href="{{route('home')}}" class="hover:text-gray-300">Filmes</a></li>
                        <li><a href="{{route('movies.search')}}" class="hover:text-gray-300">Pesquisar Filme</a></li>
                        <li><a href="/contato" class="hover:text-gray-300">Contato</a></li>
                    </ul>
                </nav>
            </div>
            <div>
                <button
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded flex items-center">
                    checkout
                </button>
            </div>
        </div>
    </div>
</header>
