@php
    $navItems = config('navMenu');
@endphp

<header>
    <div class="bg-primary">
        <div class="container d-flex justify-content-end">
            <a href="#" class="text-light link-underline-opacity-0 link-underline">DC POWER VISA</a>
            <a href="#" class="text-light link-underline-opacity-0 link-underline">ADDITIONAL DC SITES</a>
        </div>
    </div>
    <div class="container d-flex justify-content-start gap-5">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo">
        <ul class="d-flex gap-3 align-items-center nav">
            @foreach ($navItems as $item)
            <li class="nav-item">
                <a href="#" class="text-decoration-none">{{ $item['title'] }}</a>
            </li>
            @endforeach
        </ul>
    </div>
    <div id="jumbotron">
    </div>
</header>