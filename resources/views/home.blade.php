<x-layout>

<div data-aos="fade-down" data-aos-duration="1500">
    <x-navbar2/>
    <x-navbar3/>
    
    <x-search/> 
</div>

@if(session('message'))
<div data-aos="fade-down" data-aos-duration="1500">
    <div class="alert d-flex align-items-center mt-2 justify-content-center ms-3 ">
        {{session('message')}}
    </div>
</div>
@endif 

    {{-- carosello --}}
    <x-carosello :articles="$articles"/>
    <x-article-card :articles="$articles" :count="$count"/>

    {{-- container di background --}}
       
</x-layout>