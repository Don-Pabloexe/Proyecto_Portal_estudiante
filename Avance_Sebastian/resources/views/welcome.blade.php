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
                background-repeat: no-repeat;
                background-attachment: fixed;
            }

            .navbar {
                padding-top: 22px;
                padding-bottom: 22px;
                margin-left: 10px;
                margin-right: 10px;
            }

            .nav-r{
                float: right;
                text-align: right;
            }

        </style>

    </head>

    <body>

        <nav class = "navbar">
            <img href = "#" src = "{{ asset('images/icon_uct2.png') }}" alt = "" width = "130" height = "45" aria-controls = "sidebar">

            <div>
                <img href = "#" src = "{{ asset('images/icon_uct.png') }}" class = "nav-r" width = "25%">
                <img href = "#" src = "{{ asset('images/icon_uct.png') }}" class = "nav-r" width = "25%">
                <img href = "#" src = "{{ asset('images/icon_uct.png') }}" class = "nav-r" width = "25%">
            </div>
        </nav>

        
        <script src = "{{ asset('js/app.js') }}" type = "text/js"></script>
    </body>
</html>
