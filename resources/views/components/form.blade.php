
<form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Titolo</label>
                        <div class="col-sm-10">
                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                            {{-- display error div --}}
                            @error('title')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Descrizione</label>
                        <div class="col-sm-10">
                            <input name="description" type="text" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">
                            {{-- display error div --}}
                            @error('description')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Categoria</label>
                        <select  name="category_id" id="" class="col-sm-10 form-control">
                            @foreach($categories as $category)

                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Immagine</label>
                        <div class="col-sm-10">
                            <input name="img" type="file" class="form-control @error('img') is-invalid @enderror" value="{{old('img')}}">
                         {{-- display error div --}}
                         @error('img')
                         <div class="alert alert-danger">{{$message}}</div>
                         @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Articolo</label>
                        
                           <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror"></textarea>
                            {{-- display error div --}}
                            @error('body')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        
                    </div>
                    <button type="submit" class="btn btn-success">Pubblica</button>
                </form>