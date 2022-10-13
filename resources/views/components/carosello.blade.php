 {{-- <div data-aos="fade-up" data-aos-duration="1500"> --}}
     <div class="container-fluid mt-5">
         <div class="row justify-content-center ">
             {{-- <div class="div-virgolette-gialle">
                <img src="/media/VIRGOLETTE.png" class="virgolette-gialle" alt="virgolette gialle">
            </div> --}}






             <div id="carouselExampleCaptions" class="carousel slide col-12 col-md-9" data-bs-ride="false">

                 <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>


             

                 <div class="carousel-inner ">
                     @foreach ($articles as $article)
                     <div class="carousel-item active">

                         <img src="{{Storage::url($article->img)}}" class="d-block w-100 img-carosello" alt="{{$article->title}}">
                         <div class="carousel-caption d-none d-md-block ">
                             <a href="{{route('articles.show', $article)}}" class="carosello-hover">
                                 <h5 class="article-title">{{$article->title}}</h5>
                                 <p class="article-description">{{substr($article->description, 0, 20)}} ... </p>
                             </a>
                         </div>
                     </div>
                     @endforeach
                 </div>


                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                     <span class="carousel-control-next-icon " aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                 </button>


             </div> 





         </div>
     </div>
 {{-- </div> --}}













