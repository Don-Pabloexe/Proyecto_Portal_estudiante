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
                background-size: cover;
            }

            .navbar {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                padding-top: 18px;
                padding-bottom: 38px;
                border: solid 2px;
                
            }

            .navbar2 {
                position: -webkit-sticky;
                position: sticky;
                display: block;
                top: 0;
                width: 28px;
                height: 28px;
                margin-left: 10px;
                
            }

            .nav-r{
                position: sticky;
                text-align: center;
            }

            .nav-r2{
                float: right;
                text-align: right;
                position: sticky;
                margin-left: 10px;
            }


            .sec_img {
                display: inline;
                font-size: 0px;
            }

            .secciones {
                width: 50%;
                border: solid 2px;

            }

            .secciones2 {
                width: 25%;
                border: solid 2px;

            }

            footer {
                margin-top: 36px;
                text-align: center;

            }

        </style>

    </head>

    <body>

        <nav class = "navbar">
            <img href = "#" src = "{{ asset('images/icon_uct2.png') }}" alt = "" width = "130" height = "45" aria-controls = "sidebar">

            <div>
                <img href = "#" src = "{{ asset('images/logout.png') }}" class = "nav-r" width = "35">
            </div>

            <div>
                <a href = "https://www.facebook.com/canaluctemuco/"><img href = "#" src = "{{ asset('images/fb.png') }}" class = "nav-r2" width = "35"></a>
                <a href = "https://www.instagram.com/uctemuco/?hl=es-la"><img href = "#" src = "{{ asset('images/ig.png') }}" class = "nav-r2" width = "35"></a>
            </div>
        </nav>

        <div class = "sec_img">
            <img href = "#" src = "{{ asset('images/cursos.jpg') }}" class = "secciones">
            <img href = "#" src = "{{ asset('images/cursos.jpg') }}" class = "secciones">
            <img href = "#" src = "{{ asset('images/cursos.jpg') }}" class = "secciones2">
            <img href = "#" src = "{{ asset('images/cursos.jpg') }}" class = "secciones2">
            <img href = "#" src = "{{ asset('images/cursos.jpg') }}" class = "secciones2">
            <img href = "#" src = "{{ asset('images/cursos.jpg') }}" class = "secciones2">
            <img href = "#" src = "{{ asset('images/cursos.jpg') }}" class = "secciones">
            <img href = "#" src = "{{ asset('images/cursos.jpg') }}" class = "secciones">
            <img href = "#" src = "{{ asset('images/cursos.jpg') }}" class = "secciones2">
            <img href = "#" src = "{{ asset('images/cursos.jpg') }}" class = "secciones2">
            <img href = "#" src = "{{ asset('images/cursos.jpg') }}" class = "secciones2">
            <img href = "#" src = "{{ asset('images/cursos.jpg') }}" class = "secciones2">
        </div>

        
        <script src = "{{ asset('js/app.js') }}" type = "text/js"></script>

        <footer>
            <p>Author: Sebastian Muñoz Riquelme</p>
            <p><a href = "#">manredfan10@gmail.com</a></p>
        </footer>
    </body>
</html>
