<x-layout>
    <x-navbar3/>
    {{-- pt-10 my-5 --}}
    <div class="container my-5 articles-border ">
        {{-- pt-5 pb-5 justify-content-evenly align-items-center --}}
        <div class="row justify-content-center">
            <div class="d-flex text-center col-12 col-md-9">
                <h2 class="article-title w-100">{{$article->title}}</h2>    
            </div>
        </div>        
        
        <div class="row justify-content-center">
            <div class="d-flex text-center col-12 col-md-9">
                <h4 class="article-description w-100">{{$article->description}}</h4>
            </div>         
        </div> 






<!-- 
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 div-img-show d-flex justify-content-center ">
                <img src="{{Storage::url($article->img)}}" class="img-show mx-1 my-1 w-100"  alt="{{$article->title}}">
            </div>
        </div>  -->


        <div class="container my-5" >
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-5 div-img-card ">
                            <img src="{{Storage::url($article->img)}}" class="card-img-top card-img "  alt="{{$article->title}}">
                        </div>
                        
                    </div>
                </div>




        <div class="row justify-content-center">
            <div class="col-12 col-md-9 ">
                <p class="article-author">Pubblicato da : <a class="article-author" href="{{route('articles.user', $article->user)}}">{{$article->user->name}}</a></p>
                <p class="article-author">{{$article->created_at->format('d/m/Y')}}</p>
               
            </div>
        </div> 

        <div class="row justify-content-center">
            <div class="col-12 col-md-7 d-flex justify-content-center">
                <p class="article-body">{{$article->body}}</p>
            </div>
        </div> 


        <div class="row justify-content-center">
            <div class="col-12 col-md-9 ">
                    @foreach($article->tags as $tag)
                        <p class="article-tag">Tags : #{{$tag->name}} </p>
                    @endforeach
                    <span class="article-category-show">Categoria: 
                        <a href="{{route('articles.category', $article->category)}}" class="article-category-show">  {{$article->category->name}}</a>
                    </span>
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



</x-layout>
            
            

                
                
                
           
                 
                        
                 
                



            
            






