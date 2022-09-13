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
        
        <div class = "carous">
            <div id = "carouselExampleControls" class = "carousel slide" data-ride = "carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src = "{{ asset('images/cursos.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src = "{{ asset('images/back.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src = "{{ asset('images/cursos.jpg') }}" alt="Third slide">
                    </div>
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
        <script src = "{{ asset('js/app.js') }}" type = "text/js"></script>
    </body>
</html>
