
<x-layout>

    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
<div class="container-fluid bg-home vh-100 ">
    <div class="row justify-content-center">
        <h1 class="text-center titleMain mt-5">The Aulab Post</h1>
        <h2 class="text-center claim mb-5 mt-3">Update your Future</h2>
        @foreach ($articles as $article)
        <div class="col-3 justify-content-center d-flex mt-5 ">
            <div class="card mb-5 mt-5" style="width: 18rem;">
                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                <div class="card-body">
                <h5 class="card-title">{{$article->title}}</h5>
                <p class="card-text">{{substr($article->description, 0, 20)}} ...</p>
                <a href="{{route('articles.category', $article->category)}}" class="btn btn-primary">{{$article->category->name}}</a>
                <a href="{{route('articles.show', $article)}}" class="btn btn-primary">Leggi</a>
            </div>
          </div>
        </div>  
        @endforeach
        
    </div>
</div>
</x-layout>