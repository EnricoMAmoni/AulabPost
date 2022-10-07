<x-layout>
    <x-navbar2/>
    <x-navbar3/>
    <x-search/>

    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif 
    <div class="vh-100"></div>
    {{-- container di background --}}
        <div class="container bg-white">
            @foreach ($articles as $article)
            <hr class="bg-danger border-1 border-top border-danger w-100 text-center">
                @if ($count % 2 == 0)
                    <div data-aos="fade-right" data-aos-duration="1500">
                        <div class="container my-5" style="width: 100%; heigth:300px">
                            <div class="row">
                                <div class="col-12 col-md-4 div-img ">
                                    <img src="{{Storage::url($article->img)}}" class="card-img-top card-img "  alt="{{$article->title}}">
                                </div>
                                <div class="col-12 col-md-6">
                                    <h1>{{$article->title}}</h1>
                                    <h3>{{$article->description}}</h3>
                                    <a href="{{route('articles.category', $article->category)}}" class="me-3">#{{$article->category->name}}</a>
                                    <a href="{{route('articles.show', $article)}}" class="btn btn-primary me-3">Leggi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else 
                    <div data-aos="fade-left" data-aos-duration="1500" class="aos">
                        <div class="container my-5" style="width: 100%; heigth:300px">
                            <div class="row justify-content-end">
                                <div class="col-12 col-md-6 text-end">
                                    <h1>{{$article->title}}</h1>
                                    <h3>{{$article->description}}</h3>
                                    <a href="{{route('articles.category', $article->category)}}" class="me-3">#{{$article->category->name}}</a>
                                    <a href="{{route('articles.show', $article)}}" class="btn btn-primary me-3">Leggi</a>
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