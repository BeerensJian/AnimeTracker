@props(['relationships'])

<div>
    <h3 class="pb-2">Relations:</h3>
    <div class="row">
        @foreach($relationships as $relationType)
            <div class="mb-3">
                <h5 class="pb-2">{{ $relationType['relation'] }}</h5>
                <div>
                    @foreach($relationType['entry'] as $relationEntry)
                        <div class="bg-body-tertiary p-2 border mt-1 d-flex justify-content-between align-content-center">
                            <div>
                                <x-badge class="{{ $relationEntry['type'] == 'anime' ? 'bg-primary' : 'bg-secondary' }} mb-1" :text="$relationEntry['type']"/>
                                <h6>{{ $relationEntry['name'] }}</h6>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <a
                                    href="{{ $relationEntry['type'] === 'anime' ? "/anime/" . $relationEntry['mal_id'] : $relationEntry['url'] }}"
                                    class="btn btn-primary"
                                >
                                    {{ $relationEntry['type'] === 'anime' ? "Go to Page" : "View on MAL" }}
                                    <span class="material-symbols-outlined" style="vertical-align: middle;">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        @endforeach
    </div>

</div>
