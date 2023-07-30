<x-layout>
    <x-navbar />

    <div class="container ">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>


    {{-- form --}}
    <div class="container w-50 p-3">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label text-white">Title</label>
                        <input type="text" name="title" class="form-control" id="title"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label text-white">Content</label>
                        <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label text-white">Image</label>
                        <input type="file" name="image" class="form-control" id="image"
                            aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
