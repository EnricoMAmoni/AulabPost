<x-layout>
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <form action="{{route('login')}}" method="POST">
                    @csrf
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
                    <button type="submit" class="btn btn-success">Accedi</button>
                </form>
            </div>
        </div>
    </div>
        
</x-layout>