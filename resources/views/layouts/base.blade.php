<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel-Movies</title>
        @vite('resources/js/app.js')
    </head>
    <body>

        @include('partials.header')

        <div class="container">
            <main>
                @yield('contents')
            </main>
        </div>
        
        @include('partials.footer')

    </body>
</html>
