<x-layout>   
    <x-navbar2/>
    <x-navbar3/>

    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif

    {{-- container di background --}}
    <div class="container background-container vh-100">

        <div class="">
            <div class="container-fluid">
                <div class="row justify-content-center mt-5">

                    @foreach ($articles as $article)
                        <div class="col-12 col-md-4">
                            <div class="card mt-3">
                                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                                <div class="card-body">
                                    <h1>{{$article->title}}</h1>
                                    <h3>{{$article->description}}</h3>
                                    <a href="{{route('articles.category', $article->category)}}" class="me-3">#{{$article->category->name}}</a>
                                    <a href="{{route('articles.show', $article)}}" class="btn btn-primary me-3">Leggi</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> 

</x-layout>


 
            {{-- @if ($count % 2 == 0)
            <div data-aos="fade-right" class="bg-light">
                <div class="row card-home justify-content-start mb-5">
                    <div class="col-6 align-content-center  d-flex">
                    <img src="{{Storage::url($article->img)}}" class="rounded-start img-card-home" alt="{{$article->title}}">
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center ">
                        <h5 class="card-title fw-bold fs-1">{{$article->title}}</h5>
                        <p class="card-text fs-5 ">{{$article->description}} ...</p>
                        <p class="card-text text-end"><small class="text-muted me-3">creato da <a href="{{route('articles.user',$article->user)}}">{{$article->user->name}}</a> il {{$article->created_at->format('d/m/Y')}}</small></p>
                        <div class="d-flex justify-content-end">
                            <a href="{{route('articles.category', $article->category)}}" class="me-3">
                                #{{$article->category->name}}</a>
                            <a href="{{route('articles.show', $article)}}" class="btn btn-primary me-3">Leggi</a>
                        </div>
                    </div>
                </div>
            </div>
            @else 
            <div data-aos="fade-left" class="bg-light row card-home justify-content-start mb-5">
                <div class="row card-home justify-content-start mb-5">
                    <div class="col-6 d-flex flex-column align-items-start justify-content-center ">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->description}} ...</p>
                        <p class="card-text text-end"><small class="text-muted me-3">creato da <a href="{{route('articles.user',$article->user)}}">{{$article->user->name}}</a> il {{$article->created_at->format('d/m/Y')}}</small></p>
                        <div>
                            <a href="{{route('articles.category', $article->category)}}" class="btn btn-primary">{{$article->category->name}}</a>
                            <a href="{{route('articles.show', $article)}}" class="btn btn-primary">Leggi</a>
                        </div>
                    </div>
                    <div class="col-6 align-content-center  d-flex">
                    <img src="{{Storage::url($article->img)}}" class="img-card-home img-fluid" alt="{{$article->title}}">
                    </div>
                    
                </div>
            </div>
        @endif
        
        @php $count++; @endphp --}}