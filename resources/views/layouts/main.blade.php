<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- STULE CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- TITLE --}}
        <title>Laravel</title>
    </head>

    <body>
        {{-- HEADER --}}
        @include('partials.header')
        {{-- /HEADER --}}

        {{-- MAIN --}}
        <main>
            @yield('main-content')
        </main>
        {{-- /MAIN --}}
    </body>
</html>