<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <title>Inicio Sesión</title>
        <link href = "{{ asset('css/app.css') }}" rel = "stylesheet" type = "text/css"/>
        <link rel = "icon" href = "{{ asset('images/icon_uct.png') }}">
        <style>
            body {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <div class = "card" style = "width: 18rem;">
    <img src = "{{ asset('images/icon_uct.png')}}" class = "card-img-top" alt = "...">
    <div class = "card-body">
        <h5 class = "card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href = "#" class = "btn btn-primary">Go somewhere</a>
    </div>
    </div>
        <script src = "{{ asset('js/app.js') }}" type = "text/js"></script>
    </body>
</html>
