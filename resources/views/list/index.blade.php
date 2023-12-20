<x-layout>
    <div class="row mt-5">
        <div class="col-3 bg-body-secondary me-4">
            settings tab
        </div>
        <div class="col bg-body-secondary py-3">
            @forelse($list_items as $list_item)
                <div class="list-item-container">
                    <img class="image" style="background: url('{{ $list_item->image_url }}')" alt="" src="{{ $list_item->image_url }}">
                    <div>
                        <h4>{{ $list_item->preferred_title }}</h4>
                        <span>Current Episode: {{ $list_item->episode }} / {{ $list_item->total_episodes }}</span>
                    </div>
                    <div class="ms-auto">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>

                </div>
            @empty
                <p class="text-center">No entries found</p>
            @endforelse
        </div>
    </div>
    @if(session()->has('message'))
        <x-flash :message="session()->get('message')"/>
    @endif
</x-layout>
