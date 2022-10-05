<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Post <i class="fa-regular fa-newspaper"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link nav-log" href="{{route('login')}}">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-reg" href="{{route('register')}}">Registrati</a>
          </li>
          @else

          {{-- bottone inserimento articolo --}}
          <li class="nav-item">
            <a class="nav-link" href="{{route('articles.create')}}">Inserisci articolo</a>
          </li>

          <a class="nav-link dropdown-toggle nav-log" href="#" id="navbarDropdownMenuLink" role="button" 
          data-bstoggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a>
        
          <a class="nav-link nav-reg" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout </a>               
          <form id="logout-form"action="{{route('logout')}}" method="POST">
            @csrf
          </form>
          @endguest
        </ul>
      </div>
    </div>
  </nav>