<x-layout>

<div data-aos="fade-down" data-aos-duration="1500">

    <x-navbar2/>
    
    
    
</div>
    <x-navbar3/>
    <x-search/> 
@if(session('message'))
<div data-aos="fade-down" data-aos-duration="1500">
    <div class="alert alert-warning d-flex align-items-center mt-2 justify-content-center ms-3 ">
        {{session('message')}}
    </div>
</div>
@endif 

    {{-- carosello --}}
    <x-carosello :articles="$articles"/>
    <x-article-card :articles="$articles" :count="$count"/>

    {{-- container di background --}}
       
</x-layout>
