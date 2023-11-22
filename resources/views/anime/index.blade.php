<x-layout>
    <header>
        <h1 class="text-center py-4">Look for anime to add to your list</h1>
        <div class="d-flex justify-content-center mb-5">
            <input type="text" class="form-control w-50 me-3">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            @foreach($animes as $anime)
                <div class="col-3">
                    <div class="card">
                        <img src="{{ $anime['images']['jpg']['image_url'] }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $anime['title_english'] }}</h5>
                            <p class="card-text cutoff-3">{{ $anime['synopsis'] }}</p>
                            <a href="#" class="btn btn-primary">Add to list</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
