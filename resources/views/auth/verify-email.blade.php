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
                <h1>Well done! Check your email!</h1>
            </div>
        </div>
    </div>


</x-layout>
