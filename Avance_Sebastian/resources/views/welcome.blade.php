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
                background-color: ;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: auto;
            }

            .navbar {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                padding-top: 12px;
                padding-bottom: 12px;
                background-color: #0275FE; 
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
                float: right;
                text-align: right;
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
                font-size: 0px;
                opacity: 0.4;
            }

            .secciones2 {
                width: 25%;
            }

            .secciones3 {
                width: 100%;
                opacity: 0.4;
            }

            .centered {
                position: absolute;
                top: 45%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: #FFFFFF;
                text-align: center;
            }

            .primero {
                font-family: Segoe UI;
            }

            .segundo {
                font-family: Segoe UI;
            }

            footer {
                margin-top: 24px;
                text-align: center;

            }

            .img-c {
                font-size: 0px;
            }

        </style>

    </head>

    <body>
        <nav class = "navbar">
            <img href = "#" src = "{{ asset('images/icon_uct2.png') }}" alt = "" width = "130" height = "45" aria-controls = "sidebar">
            <div>
                <a href = "#"><img href = "#" src = "{{ asset('images/logout.png') }}" class = "nav-r2 ml-4" width = "34"></a>
                <a href = "https://www.facebook.com/canaluctemuco/"><img href = "#" src = "{{ asset('images/fb.png') }}" class = "nav-r2" width = "32"></a>
                <a href = "https://www.instagram.com/uctemuco/?hl=es-la"><img href = "#" src = "{{ asset('images/ig.png') }}" class = "nav-r2" width = "32"></a>
            </div>      
        </nav>
            
        <div>
            <img src = "{{ asset('images/cursos.jpg') }}" class = "secciones3">
            <div class = "centered">
                <h1 class = "primero" style = "Segoe UI">Inscripción de Cursos</h1>
                <a href = "https://www.youtube.com/"><button type = "button" class = "btn btn-info d-grid mt-3">Click Aquí</button></a>
            </div>
        </div>

        <div class = "img-c">
            <img src = "{{ asset('images/documentos.jpg') }}" class = "secciones">
            <img src = "{{ asset('images/biblioteca.jpg') }}" class = "secciones">
        </div>

        <footer>
            <p>Author: Sebastian Muñoz Riquelme</p>
            <p><a href = "#">manredfan10@gmail.com</a></p>
        </footer>

        <script src = "{{ asset('js/app.js') }}" type = "text/js"></script>
    </body>
</html>
