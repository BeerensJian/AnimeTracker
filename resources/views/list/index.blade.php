<x-layout>
    <div class="row mt-5">
        <div class="col-3 bg-body-secondary me-4">
            settings tab
        </div>
        <div class="col bg-body-secondary">
            list of animes
        </div>
    </div>
    @if(session()->has('message'))
        <x-flash :message="session()->get('message')"/>
    @endif

</x-layout>
