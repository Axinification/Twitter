<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Twitter with Laravel</title>
    </head>
    <body class="antialiased">
        <div id="data" data='{{ $data }}'> </div>
        <div id="profile"> </div>
        <script defer src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
