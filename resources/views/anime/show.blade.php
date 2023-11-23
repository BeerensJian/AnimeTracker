<x-layout>
    <div class="container d-flex gap-4 bg-body-secondary mt-4 p-4">
        <div>
            <img src="{{ $anime['images']['webp']['image_url'] }}" alt="">
            <div><span>Status</span>: {{ $anime['status'] }}</div>
            <div><span>Episodes</span>: {{ $anime['episodes'] }}</div>
            <div><span>Episode Duration</span>: {{ $anime['duration'] }}</div>
            <div><span>Release year</span>: {{ $anime['year'] }}</div>
            <a class="btn btn-outline-primary" href="{{ $anime['url'] }}">View on MAL</a>
        </div>

        <div>
            <h2>{{ $anime['title'] }}</h2>
            <p>{{ $anime['synopsis'] }}</p>
        </div>
    </div>
</x-layout>
