{{-- <x-layout>

    <x-navbar3/>

  @if(session('message'))
  <div class="alert alert-success">
      {{session('message')}}
  </div>
  @endif
  <div class="container-fluid bg-home mt-5 vh-100">
      <div class="row justify-content-center">
        @foreach ($articles as $article)
        <div class="card" style="width: 18rem;">
            <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
            <div class="card-body">
              <h5 class="card-title">{{$article->title}}</h5>
              <p class="card-text">{{substr($article->description, 0, 20)}} ...</p>
              
              <a href="{{route('articles.show', $article)}}" class="btn btn-primary">Leggi</a>
            </div>
          </div>
        
        @endforeach
      
  </div>
</div>
</x-layout> --}}
<x-layout>

<x-navbar3/>


@if(session('message'))
<div class="alert alert-success">
  {{session('message')}}
</div>
@endif


<div class="text-center">
  <h2>{{$category->name}}</h2>
</div>          
  




<x-article-card :articles="$articles" :count="$count"/>
{{-- <div class="container-fluid bg-home  mt-5 ">
  <div class="row justify-content-evenly">
    @foreach ($articles as $article)
    <div class=" col-12 col-md-3 ">
      <div class="cardCategory card-body justify-content-evenly  ">
        <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
        
        <h5 class="card-title">{{$article->title}}</h5>
        
        <p class="card-decription">{{substr($article->description, 0, 50)}}</p>
        
        <p class="card-text"> {{substr($article->body, 0, 20)}} ...</p>
        
        <a href="{{route('articles.show', $article)}}" class="continuaAleggere">Continua a leggere</a>
      </div>
      
    </div>
    @endforeach
  </div>
</div>   --}}

{{-- 
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
                          <h3 class="article-description">{{substr($article->description, 0, 50)}}</h3>
                          <p class="card-text"> {{substr($article->body, 0, 20)}} ...</p>

                          
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
                          <h3 class="article-description">{{substr($article->description, 0, 50)}}</h3>
                          <p class="card-text"> {{substr($article->body, 0, 20)}} ...</p>

                    
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
</div> --}}
</x-layout>