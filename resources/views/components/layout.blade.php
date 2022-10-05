<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;1,100&family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{$title ?? ''}}</title>
</head>
<body>

    <x-navbar/>
    <div class="bg-home">
        {{$slot}}
    </div>
    
    <x-footer/>

</body>
</html>