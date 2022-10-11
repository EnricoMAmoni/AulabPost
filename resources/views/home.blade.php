<x-layout>

<div data-aos="fade-down" data-aos-duration="1500">
    <x-navbar2/>
    <x-navbar3/>
    
    {{-- <x-search/> --}}
</div>

@if(session('message'))
<div data-aos="fade-down" data-aos-duration="1500">
    <div class="alert alert-success">
        {{session('message')}}
    </div>
</div>
@endif 

    {{-- carosello --}}
    <x-carosello/>
    <x-article-card :articles="$articles" :count="$count"/>

    {{-- container di background --}}
       
</x-layout>