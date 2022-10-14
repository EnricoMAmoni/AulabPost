<form action="{{route('tag.store')}}" method="post" class="w-100">
    @csrf 
    <label>Inserisci un nuovo tag</label>
    <div class="row d-flex d-inline w-100">
        
        <div class="col-9 col-md-5">
            <input type="text" class="form-control w-100" placeholder="nome tag" name="name">
        </div>
        <div class="col-9 col-md 3">
            <button class="btn btn-save mx-2 my-1" type="submit">Salva</button>
        </div>

    </div>

</form>