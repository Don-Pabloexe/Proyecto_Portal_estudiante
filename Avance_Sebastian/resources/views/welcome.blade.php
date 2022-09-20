<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <title>Bienvenido</title>
        <link href = "{{ asset('css/app.css') }}" rel = "stylesheet" type = "text/css"/>
        <link rel = "icon" href = "{{ asset('images/icon_uct.png') }}">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

        <style>

            body {
                background-color: #0275FE;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: cover;
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
        

        <div class="accordion nav flex-column text-white mt-4 pb-4" id="accordionExample" style = "background-color: #; width: 25%; float:left;">
            <div class="accordion-item mt-4 ml-4 mr-4 b-0">
                <h2 class="accordion-header" id="headingOne">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <img src = "{{ asset('images/notap.png') }}" alt="Logo" width="18" height="18" class="d-inline-block align-text-top">
                    Solicitud Nota P
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body mb-2 mt-4">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item mt-4 ml-4 mr-4 b-0">
                <h2 class="accordion-header" id="headingTwo">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <img src = "{{ asset('images/book.png') }}" alt="Logo" width="18" height="18" class="d-inline-block align-text-top">
                    Prestamo Biblioteca
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body mb-2 mt-4">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item mt-4 ml-4 mr-4 b-0">
                <h2 class="accordion-header" id="headingThree">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <img src = "{{ asset('images/info_a.png') }}" alt="Logo" width="18" height="18" class="d-inline-block align-text-top">
                    Información Académica
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body mb-2 mt-4">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item mt-4 ml-4 mr-4 b-0">
                <h2 class="accordion-header" id="headingFour">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <img src = "{{ asset('images/notas_a.png') }}" alt="Logo" width="18" height="18" class="d-inline-block align-text-top">
                    Notas Parciales
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body mb-2 mt-4">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item mt-4 ml-4 mr-4 b-0">
                <h2 class="accordion-header" id="headingFive">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <img src = "{{ asset('images/cuenta_c.png') }}" alt="Logo" width="18" height="18" class="d-inline-block align-text-top">
                    Cuenta Corriente
                </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body mb-2 mt-4">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            </div>

            <div>
                aas
            </div>

             
        <script src = "{{ asset('js/app.js') }}" type = "text/js"></script>
    </body>
</html>
