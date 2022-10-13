<x-layout>

    <div class="container bg pt-10 my-5">

        <div>
            <h2 class="text-center">{{$article->title}}</h2>    
        </div>
        <div class="row pt-5 pb-5 justify-content-evenly align-items-center">
                
            <div class="col-12 col-md-5 text-container article-description">
                
                @if (strpos($article->description, 'http') !== false)
                    <h4><a href="{{$article->description}}">{{$article->description}}</a></h4>
                @else
                    <h4>{{$article->description}}</h4>
                @endif

                    <p class="article-author">Creato da : <a class="article-author" href="{{route('articles.user', $article->user)}}">{{$article->user->name}}</a></p>
            </div>         
                   
                

                <div class="container my-5" >
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-5 div-img-card ">
                            <img src="{{Storage::url($article->img)}}" class="card-img-top card-img "  alt="{{$article->title}}">
                        </div>
                        
                    </div>
                </div>


          
            
            <div class="col-11">

                <div class="text-container article">
                    @if  (strpos($article->body, 'http') !== false)
                        <p><a href="{{$article->body}}">{{$article->body}}</a></p>        
                    @else        
                        <p>{{$article->body}}</p>
                    @endif                
                </div>

                <p class="article-author">Creato : {{$article->created_at->diffForHumans()}}</p>

            </div>
            <div class="d-flex justify-content-evenly mt-5">
                <a href="{{route('revisor.accept', $article)}}" class="btn btn-success mx-5">Accetta</a>
                <a href="{{route('revisor.reject', $article)}}" class="btn btn-success mx-5">Rifiuta</a>
            </div>
            

         </div>
    </div>

















    {{-- <div class="container-my-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <h1>Revisione Articolo</h1>
        </div>


    </div>

    <div class="row my-5">
        <div class="col-12 col-md-6">
            <img src="{{Storage::url($article->img)}}" class="card-img-fluid" alt="{{$article->title}}">
        </div>
        <div class="col-12 col-md-6">
            <h3 class="my-3"> <span class="h5"> Titolo : </span>{{$article->title}}</h3>
            <h3 class="my-3"> <span class="h5"> Descrizione : </span>{{$article->description}}</h3>
            <h3 class="my-3"> <span class="h5"> Autore : </span>{{$article->user->name}}</h3>
            <h3 class="my-3"> <span class="h5"> Categoria : </span>{{$article->category->name}}</h3>
            <p class="my-3"><span class="h5"> Articolo : </span>{{$article->body}}</p>
            <h3 class="my-3"> <span class="h5"> Creato : </span>{{$article->created_at->diffForHumans()}}</h3>
        
            <div class="d-flex">
                <a href="{{route('revisor.accept', $article)}}" class="btn btn-success mx-5">Accetta</a>
                <a href="{{route('revisor.reject', $article)}}" class="btn btn-success mx-5">Rifiuta</a>
            </div>
            
        </div>
            
        
    </div>
</div> --}}



</x-layout>