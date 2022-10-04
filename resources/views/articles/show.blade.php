<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h1>{{$article->title}}</h1>
            <h3>{{$article->description}}</h3>
            <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">

        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <p>{{$article->body}}</p>
            <a href="{{route('articles.category', $article->category)}}" class="card-text">{{$article->category->name}}</a>
            <p>Pubblicato da : <a href="{{route('articles.user',$article->user)}}">{{$article->user->name}}</a></p>
            <p>Pubblicato il : {{$article->created_at->format('d/m/Y')}}</p>
        </div>
    </div>
</div>



</x-layout>