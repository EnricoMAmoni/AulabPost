<div class="container-fluid bg-black">
  <div class="row justify-content-center align-items-top pt-5">

    {{-- CONTATTI --}}
    <div class="col-12 col-md-3 mb-4">
      <ul class="list-group list-group-flush footer-list">
        <li><h3 class="footer-list-title">Contatti</h3></li>
        <li class="list-group-item footer-list"><a>theaulabpost@redazione.it</a></li>
        <li class="list-group-item footer-list"><a>392 6024621</a></li>
        <li class="list-group-item footer-list"><a>Strada S. Giorgio Martire, 2D | 70124 Bari (BA)</a></li>
      </ul>
      <div class="row justify-content-center mt-3">
        <div class="col-12 d-flex justify-content-evenly ">
          <a href="https://twitter.com/login?lang=it" target="blank" class="footer-icon">
            <i class="fa-brands fa-twitter"></i>
          </a>
          <a href="https://it-it.facebook.com/" target="blank" class="footer-icon" >
            <i class="fa-brands fa-square-facebook"></i>
          </a>
          <a href="https://www.instagram.com/" target="blank" class="footer-icon">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
          
            
          


    {{-- QUICK MENU --}}
    <div class="col-12 col-md-3 mb-4 ">
      <ul class="list-group list-group-flush">
        <li><h3 class="footer-list-title">Quick Menu</h3></li>
        <a class="list-group-item footer-list" href="{{route('home')}}"><li>I nostri articoli</li></a>


        {{-- lista categorie --}}
        {{-- <li class="dropdown footer-list" role="button">  --}}
          {{-- <a class="dropdown-toggle footer-list" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categorie
          </a> --}}
          {{-- <ul class="dropdown-menu footer-list"> --}}
          @foreach ($categories as $category)
          {{-- dropdown-item? --}}
      
            <a class=" footer-list-category " aria-current="page" href="{{route('articles.category', compact('category'))}}">
            {{$category->name}}
            </a>
          
          @endforeach
          {{-- </ul> --}}
         {{-- </li>  --}}
        {{-- fine lista categorie --}}

        


        <a class="list-group-item footer-list" href="{{route('work.with.us')}}"><li>Lavora con noi</li></a>
        <a class="list-group-item footer-list" href="{{route('login')}}"><li>Accedi</li></a>
        <a class="list-group-item footer-list" href="{{route('register')}}"><li>Registrati</li></a>
      </ul>
    </div>


    {{-- PARTNER --}}
    <div class="col-12 col-md-3 mb-4">
      <ul class="list-group list-group-flush">
        <li><h3 class="footer-list-title">Partner</h3></li>
        <a class="list-group-item footer-list" href="#"><li>Aulab</li></a>
        <a class="list-group-item footer-list" href="#"><li>Hackacademy</li></a>
        <a class="list-group-item footer-list" href="#"><li>MasterBranch</li></a>
      </ul>
    </div>


    <div class="col-12 col-md-12 text-center text-white bg-black p-3">
        <p class="m-0">© 2022 TheAulabPost. Tutti i diritti riservati • P.IVA IT000000000 • Privacy Policy • Codice etico</p>
    </div>





  </div>
</div>