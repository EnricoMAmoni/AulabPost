<x-layout>

    <x-navbar2/>
    <x-navbar3/>
    <x-search/> 

@if(session('message'))

    <div class="alert alert-warning d-flex align-items-center mt-2 justify-content-center ms-3 ">
        {{session('message')}}
    </div>

@endif 

    {{-- carosello --}}
    <x-carosello :articles="$articles"/>
    <x-article-card :articles="$articles" :count="$count"/>

 
       
</x-layout>
