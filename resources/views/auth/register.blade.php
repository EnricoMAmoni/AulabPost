<x-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif 
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control-plaintext">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="text" class="form-control-plaintext" placeholder="email@example.com">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="password" type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Conferma password</label>
                        <div class="col-sm-10">
                            <input name="password_confirmation" type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Registrati</button>
                </form>
            </div>
        </div>
    </div>
        
</x-layout>