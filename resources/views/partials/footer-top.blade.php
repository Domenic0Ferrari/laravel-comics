@php
    $menu = config('footerTop');
@endphp

<div id="ft-top">
    <div class="container pt-5 d-flex gap-5">
        <div class="column">
            <h5 class="text-light">DC COMICS</h5>
            <ul>
                @foreach ($menu['comics'] as $item)
                <li>
                    <a href="#">{{$item}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="column text-start">
            <h5 class="text-light">DC</h5>
            <ul>
                @foreach ($menu['dc'] as $item)
                <li>
                    <a href="#">{{$item}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="column">
            <h5 class="text-light">SITES</h5>
            <ul>
                @foreach ($menu['sites'] as $item)
                <li>
                    <a href="#">{{$item}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>