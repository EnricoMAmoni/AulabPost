<x-layout>

<div class="container my-5">
    <div class="row justify-content-center">

        <div class="col-12 col-md-8">


            <form action="{{route('articles.update', compact('article'))}}" method="POST" enctype="multipart/form-data" class="p-5 card shadow">
                @csrf
                @method('put')
                
                <div class="mb-3 ">
                    <label for="title" class="form-lable">Titolo:</label>
                    
                        <input name="title" type="text" class="form-control form-control @error('title') is-invalid @enderror "  id="title" value="{{$article->title}}"  placeholder="Inserisci titolo">
                        {{-- display error div --}}
                        @error('title')
                        <div class="alert alert-warning">{{$message}}</div>
                        @enderror
                    
                </div>
                <div class="mb-3 ">
                    <label for="title" class="form-lable">Descrizione:</label>
                    
                        <input name="description" type="text" class="form-control form-control @error('description') is-invalid @enderror "  id="title" value="  {{$article->description}}"  placeholder="Inserisci titolo">
                        {{-- display error div --}}
                        @error('description')
                        <div class="alert alert-warning">{{$message}}</div>
                        @enderror
                    
                </div>


                <div class="mb-3 ">
                    <label for="category" class="form-label">Categorie:</label>
                    <select  name="category_id" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" {{$category->id == $article->category->id ? 'selected' : ''}}> {{$category->name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 ">
                    <label for="tags" class="form-label">Tags:</label>
                    <select  name="tags[]" class="form-control multiple">
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}" {{$tag->id == $article->tags->contains($tag) ? 'selected' : ''}}>{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="my-3 ">
                    <label for="" class="form-label">Immagine attuale:</label> <br>
                    <div class="text-center">
                        <img width="300" src="{{Storage::url($article->img)}}" alt="{{$article->title}}">
                    </div>
                    
                </div>

                <div class="my-3 ">
                    <label for="image" class="form-label">Immagine:</label>
                    
                    <input name="img" type="file" class="form-control form-control @error('img') is-invalid @enderror ">
                        {{-- display error div --}}
                        @error('img')
                        <div class="alert alert-warning">{{$message}}</div>
                        @enderror
                </div>
                        
                    

                <div class="mb-3 ">
                    <label for="body" class="form-label">Articolo</label>
                    
                    <textarea name="body" id="body" cols="30" rows="6" class="form-control @error('body') is-invalid @enderror ">{{$article->body}}</textarea>
                    {{-- display error div --}}
                    @error('body')
                    <div class="alert alert-warning">{{$message}}</div>
                    @enderror
                    
                </div>
                <button type="submit" class="btn">Pubblica</button>
                
            </form>
        </div>
    </div>
</div>
</x-layout>
{{-- @error('body') is-invalid @enderror  --}}