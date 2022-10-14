<div class="container-fluid">
    <div class="row justify-content-evenly align-items-center mt-2">
        <div class="col-12 col-md-6">
            <form action="{{route('search.articles')}}" method="get" class="d-flex">
                <input type="text" name="key" class="form-control me-2" placeholder="Cerca">
                <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        
        {{-- inserire me-2 nel div? --}}
        <div class="dropdown col-12 col-md-6 p-2 d-flex justify-content-end hide-search hide-search" >
            <a class="dropdown-toggle btn hide-search " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cerca per categoria
            </a>
            <ul class="dropdown-menu dropdown-searchbar hide-search">
                @foreach ($categories as $category)
                <li class="hide-search dropdown-searchbar">
                    <a class="dropdown-item textNav dropdown-searchbar" href="{{route('articles.category', compact('category'))}}">{{$category->name}}</a>
                </li>
                @endforeach
            
            </ul>
        </div>
    </div>
</div>
