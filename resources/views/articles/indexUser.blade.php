<x-layout>

    <x-navbar3/>


    <div class="d-flex justify-content-center">
      <h2 class="article-title mt-5">Articoli di: 
        {{-- <span class="article-title">{{$article->user->name}}</span> --}}
      </h2>
    </div>


    <x-article-card :articles="$articles" :count="$count"/>

    {{-- <div class="container">
        <div class="row">
            @foreach ($articles as $article)
            <div class="card mt-5" style="width: 18rem;">
                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                <div class="card-body">
                  <h5 class="card-title">{{$article->title}}</h5>
                  <p class="card-text">{{substr($article->description, 0, 20)}} ...</p>
                  
                  <a href="{{route('articles.show', $article)}}" class="btn btn-primary">Leggi</a>
                </div>
              </div>
            
            @endforeach
        </div>
    
    </div> --}}
    
    </x-layout>