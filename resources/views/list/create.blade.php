<x-layout>
    <div class="row mt-5">
        <div class="col-md-3 h-100">
            <img class="image-preview" src="{{ $anime['images']['webp']['large_image_url'] ?? '' }}" alt="">
        </div>
        <form action="/list/create" method="post" class="row col-md-9 align-content-start">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" value="{{ $anime['title'] ?? '' }}" disabled class="form-control disabled">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" disabled rows="8">{{ $anime['synopsis'] ?? '' }}</textarea>
            </div>
            <div class="col-md-6">
                <label for="rating" class="form-label">Rating</label>
                <select class="form-select" id="rating" name="rating" aria-label="Default select example">
                    <option value="0" selected>Select a rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="episode" class="form-label">Current Episode</label>
                <input type="number" id="episode" name="episode" class="form-control" min="0" value="1">
            </div>
            <div class="col-md-3 mb-3">
                <label for="total_episodes" class="form-label">Total Episodes</label>
                <input type="number" id="total_episodes" name="total_episodes" value="{{ $anime['episodes'] }}" class="form-control">
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary">Create Entry</button>
            </div>

        </form>
    </div>
</x-layout>
