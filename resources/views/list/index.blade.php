<x-app>
    @foreach($animes as $anime)
        {{ $anime->title }}
    @endforeach
</x-app>
