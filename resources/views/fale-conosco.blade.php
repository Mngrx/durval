<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Durval Paiva - Fale Conosco</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

        <div id="app" class="jumbotron-fluid bg-white">
            <contato-view></contato-view>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
