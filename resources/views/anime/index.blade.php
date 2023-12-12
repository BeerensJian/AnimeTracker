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
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <a href="/anime/{{ $anime['mal_id'] }}">
                            <img src="{{ $anime['images']['jpg']['image_url'] }}" alt="" class="card-img-top">
                        </a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-reset text-decoration-none">{{ $anime['title_english'] }}</h5>
                            <p class="card-text cutoff-3">{{ $anime['synopsis'] }}</p>
                            <div class="mt-auto d-flex justify-content-between gap-2">
                                <a href="/list/create?id={{ $anime['mal_id'] }}" class="btn btn-outline-light "><b>+</b> <span class="text-hidden">Add to List</span></a>
                                <a href="/anime/{{ $anime['mal_id'] }}" class="btn btn-primary">More info</a>
                            </div>

                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</x-layout>
