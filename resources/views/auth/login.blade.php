<x-layout>
   

    <div class="container">
        <div class="row vh-60 justify-content-center align-items-center ">
            <h3 class="text-center fs-1 mt-5">Accedi</h3>
            <div class="col-12 col-md-6 col-lg-6  border-auth">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="text" class="ms-3 form-control" placeholder="email@example.com">
                            @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="password" type="password" class="ms-3 form-control" id="inputPassword" placeholder="Inserisci password">
                            @error('password')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Accedi</button>
                </form>
            </div>
        </div>
    </div>
        
</x-layout>