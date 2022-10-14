<x-layout>

    <x-navbar3/>

    <div class="text-center">
      <h2 class="article-category-title mt-5 mb-5"> Articoli per : {{$key}}</h2>
    </div>

    <x-article-card :articles="$articles" :count="$count" />

</x-layout>