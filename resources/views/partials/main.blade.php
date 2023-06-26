<main>
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
            <button>LOAD MORE</button>
        </div>
    </div>
    {{-- parte inferiore --}}
    <div id="main-bottom">
        <div class="container">
            {{-- creare un array e ciclare gli elementi della lista --}}
            <ul> 
                <li>
                    <img src="#" alt="#">
                    <p>TESTO</p>
                </li>
            </ul>
        </div>
    </div>
</main>