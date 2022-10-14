<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="article-title">Lavora con noi</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3 class="article-description">Lavora come scrittore</h3>
                <p class="article-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam delectus distinctio aliquid libero saepe vel perspiciatis obcaecati modi at dolor! Velit numquam quam, odit laborum iste aliquid provident quibusdam natus.</p>

                <h3 class="article-description">Lavora come revisore</h3>
                <p class="article-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam delectus distinctio aliquid libero saepe vel perspiciatis obcaecati modi at dolor! Velit numquam quam, odit laborum iste aliquid provident quibusdam natus.</p>

                <h3 class="article-description">Lavora come amministratore</h3>
                <p class="article-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam delectus distinctio aliquid libero saepe vel perspiciatis obcaecati modi at dolor! Velit numquam quam, odit laborum iste aliquid provident quibusdam natus.</p>
            </div>

            <div class="col-12 col-md-6">
                <form action="{{route('user.role.request')}}" method="POST">
                @csrf
                
                <div class="mb-3">

                    <label class="form-label h3 article-description">Per quale posizione vuoi candidarti?</label>
                    <select class="form-control article-body" name="role" id="">
                        <option value="admin" class="article-body" >Amministratore</option>
                        <option value="revisor" class="article-body">Revisore</option>
                        <option value="writer" class="article-body">Scrittore</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label h5 article-description">Inviaci la tua email</label>
                    <input type="email" class="form-control article-body" name="email" @auth value="{{Auth::user()->email}}" @endauth>
                </div>

                <div class="mb-3">
                    <label class="form-label h5 article-description">Perché dovremmo assumerti?</label>
                    <textarea class="form-control" name="presentation" id="" cols="30" rows="10"></textarea>
                    
                </div>

                <button class="btn btn-success" type="submit">Invia candidatura</button>

                </form>
            </div>
        </div>
    </div>

</x-layout>