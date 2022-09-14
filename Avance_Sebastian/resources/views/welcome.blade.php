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

            .title {
                text-align: center;
                width: 50%;
            }

            .news {
                font-size: 0px;
            }

            .seccions {
                margin-top: 35px;
                width: 50%;
                margin-left: auto;
                margin-right: auto;
            }

            .seccions2 {
                width: 33.33%;
                margin-left: auto;
                margin-right: auto;
            }

            .seccions3 {
                width: 50%;
                margin-left: auto;
                margin-right: auto;
            }

        </style>

    </head>

    <body>

        <nav class = "navbar">
            <img href = "#" src = "{{ asset('images/icon_uct2.png') }}" alt = "" width = "130" height = "45">

            <div>
                <img href = "#" src = "{{ asset('images/icon_uct.png') }}" class = "nav-r" width = "25%">
                <img href = "#" src = "{{ asset('images/icon_uct.png') }}" class = "nav-r" width = "25%">
                <img href = "#" src = "{{ asset('images/icon_uct.png') }}" class = "nav-r" width = "25%">
            </div>
        </nav>

        <div class = "news">
            <img class = "seccions" src = "{{ asset('images/cursos.jpg') }}">
            <img class = "seccions" src = "{{ asset('images/biblio.jpg') }}">
            <img class = "seccions2" src = "{{ asset('images/cursos.jpg') }}">
            <img class = "seccions2" src = "{{ asset('images/cursos.jpg') }}">
            <img class = "seccions2" src = "{{ asset('images/cursos.jpg') }}">
            <img class = "seccions3" src = "{{ asset('images/cursos.jpg') }}">
            <img class = "seccions3" src = "{{ asset('images/cursos.jpg') }}">
        </div>

        <script src = "{{ asset('js/app.js') }}" type = "text/js"></script>
    </body>
</html>
