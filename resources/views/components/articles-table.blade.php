
<div class="container mt-5 mb-5 container-revisore">
    <div class="row align-items-center ">
        
        @foreach ($articles as $article)

        <div class="col-12 col-md-2 ">
            <h3 class="mt-2">#</h3>
            <p class=" mt-3">{{$article->id}}</p>
            
        </div>
        <div class="col-12 col-md-2">
            <h3 class="mt-2">Titolo</h3>
            <p class=" mt-3">{{$article->title}}</p>
            
        </div>
        <div class="col-12 col-md-2">
            <h3 class="mt-2">Creato il</h3>
            <p class=" mt-3">{{$article->created_at->format("d/m/y")}}</p>
            
        </div>
        <div class="col-12 col-md-2">
            <h3 class="mt-2">Status</h3>
            <p class=" mt-3">{{$article->is_accepted ? "Pubblicato" : "Non pubblicato"}}</p>
            
        </div>
        <div class="col-12 col-md-2">
            <h3 class="mt-2" >Modifica</h3>
            <a href="{{ route('articles.edit', $article) }}" class="btn">Modifica</a>
            
            
        </div>
        <div class="col-12 col-md-2">
            <h3 class="mt-2">Elimina</h3>
            <form action="{{route('articles.delete', $article)}}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-delete" type="submit">Elimina</button>
                </form>
            
        </div>
        <hr class="mt-2">
        @endforeach  
        
           
            
            
            
           
            
        
    </div>
</div>
















<!-- <table class="table">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Creato il</th>
            <th scope="col">Status</th>
            <th scope="col">Modifica</th>
            <th scope="col">Elimina</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->created_at->format("d/m/y")}}</td>
            <td>
                {{$article->is_accepted ? "Pubblicato" : "Non pubblicato"}}
            </td>
            <td>
                <a href="{{ route('articles.edit', $article) }}" class="btn">Modifica</a>
                 
            </td>
            <td>
                <form action="{{route('articles.delete', $article)}}" class="w-50" method="post">
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-delete" type="submit">Elimina</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>

</table> -->