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
                <form action="/register" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-white">Name</label>
                        <input type="text" name="name" class="form-control" id="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label text-white">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label text-white">Cofirm password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password"
                            aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary" value="register">Register</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
