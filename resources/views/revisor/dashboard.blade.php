<x-layout class="mb-5">
    @if(session('message'))
    <div class="alert alert-warning d-flex align-items-center mt-2 justify-content-center ms-3 ">
        {{session('message')}}
    </div>
    @endif 
    <div class="container">
       
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>
                    Bentornato {{Auth::user()->name}}
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <x-revisor-table :articles="$article"/>

                

            </div>
        </div>
    </div>
</x-layout>