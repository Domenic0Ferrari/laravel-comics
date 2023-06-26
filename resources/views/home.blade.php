@php
    $comics = config('comics')
@endphp

@extends('layouts.base')

@section('contents')
    {{-- parte superiore --}}
<div id="main-top">
    <div class="container">
        <div class="row pt-5">
            {{-- ciclare le col-2 per stampare le immagini dei fumetti e il loro titolo --}}
            @foreach ($comics as $comic)
            <div class="col-2">
                <img src="{{ Vite::asset($comic['thumb']) }}" alt="#" class="img-comic">
                <h5 class="text-light comic-title pb-5 pt-3">{{ $comic['series'] }}</h5>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center pb-4">
            <button class="text-center bg-primary">
                LOAD MORE
            </button>
        </div>
    </div>
</div>
{{-- parte inferiore --}}
@php
    $mainLinks = config('mainLinks')
@endphp
<div id="main-bottom">
    <div class="container">
        <div class="row">
            @foreach ($mainLinks as $link)
            <div class="col">
                <div>
                    <img src="{{ Vite::asset($link['image']) }}" alt="#">
                </div>
                <h3>{{ $link['text'] }}</h3>
            </div>    
            @endforeach                
        </div>
    </div>
</div>

@endsection