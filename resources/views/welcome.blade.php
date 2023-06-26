<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    @vite('resources/js/app.js')
    {{-- qui servono gli // invece dei .. --}}
</head>
<body>
    {{-- <img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> --}}
    {{-- per inserire le immagini si usa questo percorso --}}
    @include('partials.header')    
    @include('partials.main')    
    @include('partials.footer')    
</body>
</html>