<div class="container articles-border my-5">

    @forelse ($articles as $article)
         @if ($count % 2 == 0)
            <div data-aos="zoom-in" data-aos-duration="1500">
                <div class="container my-5" >
                    <div class="row border-row-left-article">
                        <div class="col-12 col-md-5 div-img-card ">
                            <img src="{{Storage::url($article->img)}}" class="card-img-top card-img "  alt="{{$article->title}}">
                        </div>
                        <div class="col-12 col-md-6 mt-3 mb-2">
                            <h2 class="article-title">{{$article->title}}</h2>
                            <h3 class="article-description">{{$article->description}}</h3>
                            <p class="card-text"> {{substr($article->body, 0, 20)}} ...</p>
                            <div class="d-flex">
                                
                                @foreach($article->tags as $tag)
                                    <p class="article-tag">Tags : #{{$tag->name}} </p>
                                @endforeach
                            </div>
                            <a href="{{route('articles.category', $article->category)}}" class="article-category">{{$article->category->name}}</a>
                            <a href="{{route('articles.show', $article)}}" class="btn me-3">Leggi</a>
                        </div>
                    </div>
                </div>
            </div>
        @else 
            <div data-aos="zoom-in" data-aos-duration="1500" class="aos">
                <div class="container my-5">
                    <div class="row justify-content-end border-row-right-article">
                        <div class="col-12 col-md-6 mt-3 text-end ">
                            <h2 class="article-title">{{$article->title}}</h2>
                            <h3 class="article-description">{{$article->description}}</h3>
                            <p class="card-text"> {{substr($article->body, 0, 20)}} ...</p>
                            {{-- <div class="d-flex"> --}}
                                <p>Tags : 
                                @foreach($article->tags as $tag)
                                <span> #{{$tag->name}} </span>
                                @endforeach
                            </p>
                            {{-- </div> --}}
                            <a href="{{route('articles.category', $article->category)}}" class="article-category">{{$article->category->name}}</a>
                            <a href="{{route('articles.show', $article)}}" class="btn me-3">Leggi</a>
                        </div>
                        <div class="col-12 col-md-5 div-img-card-right text-center">
                            <img src="{{Storage::url($article->img)}}" class="card-img-top card-img " alt="{{$article->title}}">
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @php $count++; @endphp
        {{-- <hr class="bg-danger border-1 border-top border-danger text-center hr-article mb-2"> --}}
        {{-- <hr class="bg-danger border-1 border-top border-danger text-center hr-article"> --}}
    @empty
    
    <div class="container-fluid vh-60 justify-content-center align-items-center">
        <div class="row  text-center">

        
            {{-- <div class="row"> --}}
                <div class="col-12">
                    <h5 class="article-error">Non sono ancora stati caricati articoli </h5>
                </div>
            {{-- </div> --}}
            {{-- <div class="row mt-5"> --}}
                <div class="col-12 mt-5">
                    <img class="img-fluid" src="/media/stitch.gif" alt="stitch che piange"> 
                </div>
            {{-- </div> --}}
        </div> 
         
    </div>
       
        
    @endforelse
    
</div>