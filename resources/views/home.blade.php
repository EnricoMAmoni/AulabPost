<x-layout>

<div data-aos="fade-down" data-aos-duration="1500">
    <x-navbar2/>
    <x-navbar3/>
    
    {{-- <x-search/> --}}
</div>

    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif 

    {{-- carosello --}}
    <x-carosello/>


    {{-- container di background --}}
        <div class="container bg-white ">
            @foreach ($articles as $article)
            <hr class="bg-danger border-1 border-top border-danger w-100 text-center">
                @if ($count % 2 == 0)
                    <div data-aos="fade-right" data-aos-duration="1500">
                        <div class="container my-5" style="width: 100%; heigth:300px">
                            <div class="row">
                                <div class="col-12 col-md-4 div-img ">
                                    <img src="{{Storage::url($article->img)}}" class="card-img-top card-img "  alt="{{$article->title}}">
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                    <h2 class="article-title">{{$article->title}}</h2>
                                    <h3 class="article-description">{{$article->description}}</h3>
                                    <p class="card-text"> {{substr($article->body, 0, 20)}} ...</p>

                                    <a href="{{route('articles.category', $article->category)}}" class="me-3 col-yellow">#{{$article->category->name}}</a>
                                    <a href="{{route('articles.show', $article)}}" class="btn me-3">Leggi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else 
                    <div data-aos="fade-left" data-aos-duration="1500" class="aos">
                        <div class="container my-5" style="width: 100%; heigth: 100px">
                            <div class="row justify-content-end">
                                <div class="col-12 col-md-6 mt-3 text-end">
                                    <h2 class="article-title">{{$article->title}}</h2>
                                    <h3 class="article-description">{{$article->description}}</h3>
                                    <p class="card-text"> {{substr($article->body, 0, 20)}} ...</p>

                                    <a href="{{route('articles.category', $article->category)}}" class="me-3 col-yellow">#{{$article->category->name}}</a>
                                    <a href="{{route('articles.show', $article)}}" class="btn me-3">Leggi</a>
                                </div>
                                <div class="col-12 col-md-6 div-img-right text-center">
                                    <img src="{{Storage::url($article->img)}}" class="card-img-top card-img " alt="{{$article->title}}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @php $count++; @endphp
            @endforeach
        </div>
</x-layout>