<x-layout>

    <x-navbar3/>
<div class="container ">
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-6">
            <div class="card mt-5">
                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                <div class="card-body">
                    <h1>{{$article->title}}</h1>
                    <h3>{{$article->description}}</h3>
                    <p>{{$article->body}}</p>
                    <a href="{{route('articles.category', $article->category)}}" class="card-text">{{$article->category->name}}</a>
                    <p>Pubblicato da : <a href="{{route('articles.user', $article->user)}}">{{$article->user->name}}</a></p>
                    <p>Pubblicato il : {{$article->created_at->format('d/m/Y')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>



</x-layout>