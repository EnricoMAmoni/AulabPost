<nav class="navbar nav1 navbar-expand-lg text-nav">
  <div class="container-fluid">
      
    <a class="navbar-brand textNav " href="{{route('home')}}"> <img src="/media/VIRGOLETTE.png" class="img-logo-nav ms-3" alt="logo aulab post">  </a>
    <i class="fa-regular fa-circle-user navbar-toggler" type="button" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>  --}}
      
    </i>

    
    <div class="navbar-collapse collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link textNav aria-current="page" "  href="{{route('home')}}">Home</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link nav-log textNav aria-current="page"" href="{{route('login')}}"> Accedi <i class="fa-regular fa-circle-user"></i> </a>
        </li>
        <!-- da togliere? -->
        {{-- <li class="nav-item">
          <a class="nav-link nav-reg textNav" href="{{route('register')}}">Registrati</a>
        </li> --}}

        @else

        <div class="navbar-div-logo-dinamico">
          <a href=""><img class="img-fluid navbar-logo-dinamico" src="media/AulabPost-3.png" alt=""></a>
        </div>

        {{-- NOME CHE SCENDE --}}

        <div class="dropdown nav-log dropdown-user">
          <a class="nav-link  textNav" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->name}} <i class="fa-regular fa-circle-user"></i>
          </a>

          {{-- aggiustare dropdown --}}
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            @if(Auth::user() && Auth::user()->is_admin)
            <li class="nav-item mx-2">
              <a class="nav-link textNav" href="{{route('admin.dashboard')}}">Dashboard Admin</a>
            </li>
            @endif
            
            @if(Auth::user() && Auth::user()->is_revisor)
            <li class="nav-item mx-2">
              <a class="nav-link textNav" href="{{route('revisor.dashboard')}}">Dashboard Revisore</a>
            </li>
            @endif

            @if(Auth::user() && Auth::user()->is_writer)
            {{-- bottone modifica articolo --}}
            <li class="nav-item mx-2">
              <a class="nav-link textNav" href="{{route('articles.dashboard')}}">Dashboard writer</a>
            </li>    
            @endif
                
            @if(Auth::user() && Auth::user()->is_writer)
            {{-- bottone inserimento articolo --}}
            <li class="nav-item mx-2">
              <a class="nav-link textNav" href="{{route('articles.create')}}">Inserisci articolo</a>
            </li>    
            @endif

            @if(Auth::user() && Auth::user()->is_writer && Auth::user()->is_revisor && Auth::user()->is_admin)
            @else
            <li class="nav-item mx-2">
              <a class="nav-link textNav" href="{{route('work.with.us')}}">Lavora con noi</a>
            </li>
            @endif
            
            {{-- logout --}}
            <li class="nav-item mx-2">
              <a class="nav-link  textNav" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout </a>               
              <form id="logout-form"action="{{route('logout')}}" method="POST">
                @csrf
              </form>
            </li>
          </ul>
        </div>
        @endguest
      </ul>
    </div>
  </div>
</nav>
