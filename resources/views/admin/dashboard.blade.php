<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h2>Richieste di amministratore</h2>
            <x-admin-requests-table :adminRequest="$adminRequests"/>
        </div>
    </div>
</div>
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h2>Richieste di revisore</h2>
            <x-revisor-requests-table :revisorRequest="$revisorRequests"/>
        </div>
    </div>
</div>
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h2>Richieste di articolista</h2>
            <x-writer-requests-table :writerRequest="$writerRequests"/>
        </div>
    </div>
</div>