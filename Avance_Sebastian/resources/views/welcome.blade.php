<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <title>Bienvenido</title>
        <link href = "{{ asset('css/app.css') }}" rel = "stylesheet" type = "text/css"/>
        <link rel = "icon" href = "{{ asset('images/icon_uct.png') }}">

        <style>

            body {
                background-image: url("{{ asset('images/back.jpg') }}");
                background-color: #cccccc;
            }

            .navbar {
                margin-top: 14px;
                margin-left: 10px;
            }

            .nav-r{
                float: right;
                text-align: right;
            }

            .title {
                text-align: center;
                width: 50%;
            }

            .carous {
                margin-top: 45px;
                margin-left: 55px;
                margin-right: 55px;
                padding: 0px;
                text-align: center;
                width: 30%;
            }

        </style>

    </head>

    <body>

        <nav class = "navbar">
            <img href = "#" src = "{{ asset('images/icon_uct2.png') }}" alt = "" width = "180" height = "60">

            <div>
                <img href = "#" src = "{{ asset('images/icon_uct.png') }}" class = "nav-r" width = "50" height = "50">
                <img href = "#" src = "{{ asset('images/icon_uct.png') }}" class = "nav-r" width = "50" height = "50">
                <img href = "#" src = "{{ asset('images/icon_uct.png') }}" class = "nav-r" width = "50" height = "50">
            </div>
        </nav>
        <script src = "{{ asset('js/app.js') }}" type = "text/js"></script>
    </body>
</html>
