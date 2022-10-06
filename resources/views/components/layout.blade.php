<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;1,100&family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Direttiva Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{$title ?? ''}}</title>
</head>
<body class="bg-home">
    <x-navbar/>
    
    <div class="bg-home">
        {{$slot}}
    </div>
    
    
{{-- AOS JS --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>