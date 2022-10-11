<x-layout>
    <x-navbar3/>
    <div class="container bg bg-light  pt-10">

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

                    <p class="article-author">Pubblicato da : <a class="article-author" href="{{route('articles.user', $article->user)}}">{{$article->user->name}}</a></p>
            </div>         
                   
                
            <div class="col-12 col-md-5 div-img-show ">
                <img src="{{Storage::url($article->img)}}" class="card-img-top card-img-show "  alt="{{$article->title}}">
            </div>
            <div class="col-11">

                <div class="text-container article">
                    @if  (strpos($article->body, 'http') !== false)
                        <p><a href="{{$article->body}}">{{$article->body}}</a></p>        
                    @else        
                        <p>{{$article->body}}</p        >
                    @endif                
                </div>

                <p class="article-author">Pubblicato il : {{$article->created_at->format('d/m/Y')}}</p>



            </div>
            

         </div>
    </div>






    {{-- <div class="container mb-5">
        <div class="row justify-content-center mt-5 ">
            <div class="col-12 col-md-6">
                <div class="card mt-5">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                    <div class="card-body">
                        <h1>{{$article->title}}</h1>

                        @if (strpos($article->description, 'http') !== false)
                        <h3><a href="{{$article->description}}">{{$article->description}}</a></h3>
                        @else
                        <h3>{{$article->description}}</h3>
                        @endif
                        @if (strpos($article->body, 'http') !== false)
                        <p><a href="{{$article->body}}">{{$article->body}}</a></p>
                        @else
                        <p>{{$article->body}}</p>
                        @endif
                        <a href="{{route('articles.category', $article->category)}}" class="card-text">{{$article->category->name}}</a>
                        <div class="d-flex">
                            <p>Tag : </p>
                            @foreach($article->tags as $tag)
                                <span> #{{$tag->name}} </span>
                            @endforeach
                        </div>
                        <p>Pubblicato da : <a href="{{route('articles.user', $article->user)}}">{{$article->user->name}}</a></p>
                        <p>Pubblicato il : {{$article->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


{{-- TEST VISTA SHOW --}}

    {{-- <div class="container">
        <div class="row">

            <div class="col-12">
                <img src="{{Storage::url($article->img)}}" class="card-img-top card-img-show img-fluid"  alt="{{$article->title}}">

            </div>
        </div>
        <div class="row">

        </div>
    </div> --}}
</x-layout>