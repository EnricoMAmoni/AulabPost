<x-layout>

    <x-navbar3/>

    @if(session('message'))
    <div class="alert alert-success">
      {{session('message')}}
    </div>
    @endif

    <div class="text-center">
      <h2 class="article-category-title mt-5 mb-5">{{$category->name}}</h2>
    </div>

    <x-article-card :articles="$articles" :count="$count"/>

</x-layout>