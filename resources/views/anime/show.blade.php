<x-layout>
{{--    @dd($anime)--}}
    <div class="container d-flex gap-4  mt-4 p-4">
        <div>
            <img src="{{ $anime['images']['webp']['image_url'] }}" alt="">
            <div class="bg-body-tertiary mt-5 p-3">
                <div class="mb-2"><span class="fw-bold d-block">Status:</span> {{ $anime['status'] }}</div>
                <div class="mb-2"><span class="fw-bold d-block">Episodes:</span> {{ $anime['episodes'] }}</div>
                <div class="mb-2"><span class="fw-bold d-block">Episode Duration:</span> {{ $anime['duration'] }}</div>
                <div class="mb-2"><span class="fw-bold d-block">Release year:</span> {{ $anime['year'] }}</div>
                <a class="btn btn-outline-primary" href="{{ $anime['url'] }}">View on MAL</a>
            </div>
        </div>

        <div class="ps-4">
            <h2 class="mb-4">{{ $anime['title'] }}</h2>
            <p class="text-secondary-emphasis">{{ $anime['synopsis'] }}</p>
            <div>
                <h3>Relations:</h3>
                <div class="row">
                    @foreach($anime['relations'] as $relationType)
                        <div class="w-20">
                            <h5>{{ $relationType['relation'] }}</h5>
                            <div>
                                @foreach($relationType['entry'] as $relationEntry)
                                    <div class="bg-body-tertiary p-2">
                                        <span class="badge bg-primary">{{ $relationEntry['type'] }}</span>
                                        <h6>{{ $relationEntry['name'] }}</h6>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-layout>
