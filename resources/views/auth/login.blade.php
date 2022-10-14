<x-layout>
   
<div class="container my-5">
    <div class="row h-100 justify-content-center align-items-center ">
            <!-- <h3 class="text-center fs-1 mt-5">Accedi</h3> -->
        <div class="col-11 col-md-6 col-lg-6  border-auth">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-12  col-form-label">Email</label>
                        <div class="col-12 ">
                            <input name="email" type="text" class=" form-control" placeholder="email@example.com">
                            @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-12  col-form-label">Password</label>
                        <div class="col-12 ">
                            <input name="password" type="password" class=" form-control" id="inputPassword" placeholder="Inserisci password">
                            @error('password')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn">Accedi</button>
                        </div>
                    </div>


                    <div class="row mt-5">
                        <div class="col-12">
                            <p class="p-auth">Non sei ancora registrato? <a href="{{route('register')}}" class="ancor-auth">Registrati</a></p>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
    
</x-layout>

                            