<x-layout>

    <x-navbar />

    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white text-center">Home</h1>
            </div>
        </div>
    </div>

    @foreach ($articles as $article)
        <h2 class="text-white">{{ $article->title }}</h2>
        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}">
    @endforeach

</x-layout>
