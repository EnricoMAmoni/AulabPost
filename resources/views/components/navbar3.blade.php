<nav class="navbar nav3 navbar-expand-lg p-0">
  <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav list-nav3">
          @foreach ($categories as $category)
            <li class="nav-item ">
              <a class="nav-link  textNav article-category-nav" aria-current="page" href="{{route('articles.category', compact('category'))}}">{{$category->name}}</a>
            </li>
          @endforeach
        </ul>
      </div>
  </div>
</nav>