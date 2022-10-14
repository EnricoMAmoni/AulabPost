<div class="container-fluid mt-5 mb-5 container-revisore">
    <div class="row align-items-center">
        
        @foreach ($articles as $article)

        <div class="col-12 col-md-4 ">
            <h3 class="mt-2">Id</h3>
            <p class=" mt-3">{{$article->id}}</p>
            
        </div>
        <div class="col-12 col-md-4">
            <h3 class="mt-2">Titolo</h3>
            <p class=" mt-3">{{$article->title}}</p>
            
        </div>
        <div class="col-12 col-md-4">
            <h3 class="mt-2">Categoria</h3>
            <p class=" mt-3">{{$article->category->name}}</p>
            
        </div>
        <div class="col-12 col-md-4">
            <h3 class="mt-2">Scritto da:</h3>
            <p class=" mt-3">{{$article->user->name}}</p>
            
        </div>
        <div class="col-12 col-md-4">
            <h3 class="mt-2" >Scritto il:</h3>
            <p class=" mt-3">{{$article->created_at->format('Y-m-d')}}</p>
            
        </div>
        <div class="col-12 col-md-4">
            <h3 class="mt-2 mb-3">Leggi</h3>
            <a href="{{route('revisor.detail', $article)}}" class="btn mb-3">Leggi</a>
            
        </div>
        <hr>
        @endforeach  
        
           
            
            
            
           
            
        
        </div>
    </div>
</div>




















{{-- <table class="table">
   <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">titolo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Scritto da</th>
            <th scope="col">Scritto il</th>
            <th scope="col">Leggi</th>

        </tr>
   </thead>

   <tbody>
    
        <tr>
            <th scope="row"></th>
             <td>{{$article->title}}</td>
             <td>{{$article->category->name}}</td>
             <td>{{$article->user->name}}</td>
             <td>{{$article->created_at->format('Y-m-d')}}</td>
             <td>
                <a href="{{route('revisor.detail', $article)}}" class="btn btn-primary">Leggi</a>
             </td>
            
        </tr>
        
    
   </tbody>
</table> --}}