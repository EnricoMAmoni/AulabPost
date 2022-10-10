<nav class="navbar nav3 navbar-expand-lg  p-0 ">

<div class="container-fluid nav5 align-items-center">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav nav3">

          @foreach ($categories as $category)
          
          <li class="nav-item">
            <a class="nav-link active textNav1 navt1" aria-current="page" href="{{route('articles.category', compact('category'))}}">{{$category->name}}</a>
          </li>
          
          @endforeach
      
        </ul>
    </div>   
    
</div>
</nav>