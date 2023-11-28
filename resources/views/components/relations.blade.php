@props([
    "relations" => []
])

<div>
    <div>
        <h3>Relations:</h3>
        <div>
            @foreach($relations as $relationType)
                <div>
                    <h5 class="mt-3">{{ $relationType['relation'] }}</h5>
                    <div>
                        @foreach($relationType['entry'] as $relationEntry)
                            <div class="bg-body-tertiary p-2 border py-2 mb-2 d-flex justify-content-between">
                                <div>
                                    <span
                                        class="badge {{ $relationEntry['type'] === 'anime' ? 'bg-primary' : 'bg-secondary' }}">{{ $relationEntry['type'] }}</span>
                                    <h6>{{ $relationEntry['name'] }}</h6>
                                </div>
                                <div class="my-auto">
                                    <a href="{{ $relationEntry['type'] === 'anime' ? "/anime/{$relationEntry['mal_id']}" : "{$relationEntry['url']}" }}"
                                       class="btn {{ $relationEntry['type'] === 'anime' ? 'btn-primary' : 'btn-secondary' }}">
                                        {{ $relationEntry['type'] === 'anime' ? 'Go to page' : 'View on MAL' }}
                                        <span class="material-symbols-outlined" style="vertical-align: bottom">arrow_forward_ios</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
