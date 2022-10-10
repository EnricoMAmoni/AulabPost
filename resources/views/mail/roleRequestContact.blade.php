<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Richiesta per il ruolo {{$info['role']}} ricevuta</h1>
    <p>Ricevuta da {{$info['email']}}</p>
    <h3>Messaggio:</h3>
    <p>{{$info['presentation']}}</p>
    <p>Gentile utente la rigraziamo per la sua richiesta per il ruolo di {{$info['role']}} le faremo sapere al più presto </p>
    <p>Il team aulab post</p>
    <img src="https://aulab.it/img/logo-aulab-horizontal.webp" alt="aulab post">
    {{-- <img src="media/AulabPost-2.png" alt="aulab post"> --}}

</body>
</html>