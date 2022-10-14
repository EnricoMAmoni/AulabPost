<x-layout>
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <h1 class="article-title mt-3"> Ciao {{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if (count(Auth::user()->articles) > 0)
            <div class="col-12">
                <h1 class="article-description">Tutti i tuoi articoli</h1>
            </div>
            <div class="col-12 my-3">
                <x-articles-table :articles="Auth::user()->articles"/>
            </div>
            @else
            <div class="col-12 my-3">
                <h1 class="article-description">Non hai scritto alcun articolo</h1>
                <a href="{{route('articles.create')}}" class="btn">Crea il tuo primo articolo</a>
            </div>
            @endif
        </div>
    </div>
</x-layout>
                
            