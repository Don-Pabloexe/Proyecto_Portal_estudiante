<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <title>Bienvenido</title>
        <link href = "{{ asset('css/app.css') }}" rel = "stylesheet" type = "text/css"/>
        <link rel = "icon" href = "{{ asset('images/icon_uct.png') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

        <style>

            body {
                background-image: url("{{ asset('images/1077409.png') }} ");
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

    <!--Barra de Navegación-->
    <body>
        <nav class = "navbar navbar-dark bg-dark">
            <img href = "#" src = "{{ asset('images/icon_uct2.png') }}" alt = "" width = "130" height = "45" aria-controls = "sidebar">
            <div>
                <a href = "#"><img href = "#" src = "{{ asset('images/logout.png') }}" class = "nav-r2 ml-4" width = "34"></a>
                <a href = "https://www.facebook.com/canaluctemuco/"><img href = "#" src = "{{ asset('images/fb.png') }}" class = "nav-r2" width = "32"></a>
                <a href = "https://www.instagram.com/uctemuco/?hl=es-la"><img href = "#" src = "{{ asset('images/ig.png') }}" class = "nav-r2" width = "32"></a>
            </div>      
        </nav>
        
    <!--Contenido-->

        <div class = "text-black mt-5 pb-4 ml-5 mr-5 justify-content-end">
            <h2>Reserva Horas con Asistentes Sociales</h2><br>
            <a>
                En esta sección podrás realizar una reserva de hora con un/a asistente social donde se realizan las clases de tu carrera. 
                Debes considerar que una reserva debe hacerse con <b>24 horas</b> de antelación (de Lunes a Viernes) y <b>sólo se podrá realizar una reserva cada 15 días</b> a través de este medio. 
                La atención será a través de <b>videollamada</b>, ya que se encuentran <b>suspendidas las atenciones presenciales de forma indefinida</b>.
            </a>
        </div>

        <div class = "ml-auto mr-auto rounded text-center w-auto">
            <p class = "mt-4">
                <a class = "btn btn-light pt-3 pb-3 border-dark w-auto" style = "box-shadow: none; width: 70%;" data-bs-toggle = "collapse" href = "#collapseExample" role = "button" aria-expanded = "false" aria-controls = "collapseExample">
                    Reserva hora
                </a>
            </p>
            <div class = "collapse text-center rounded justify-text-center w-auto" id = "collapseExample" style = "width: 50%;">
                <div class = "card card-body border-dark text-center" style = "background-color: white; align-items: center; justify-content: center;">
                    <label class = "" for = "start">Selecciona el día a reservar dentro de los disponibles</label>
                    <input type = "date" id = "start" name = "trip-start"
                        value = "now"
                        min = "2022-10-01" max = "2022-10-31">
                <div>
                    <a >Seleccione el Asistente:</a>
                    <select class = "form-select text-center mt-3" aria-label = "Default select example">
                        <option selected>Asistente</option>
                        <option value = "1">1</option>
                        <option value = "2">2</option>
                        <option value = "3">3</option>
                    </select>
                </div>
                <br>
                <div>
                    <a >Seleccione alguna de las horas disponibles:</a>
                    <select class = "form-select text-center mt-3" aria-label = "Default select example">
                        <option selected>1</option>
                        <option value = "1">2</option>
                        <option value = "2">3</option>
                        <option value = "3">4</option>
                    </select>
                </div>

                    <a class = "mt-5">
                            Las horas estan <b>sujetas a cambios</b> y a <b>disponibilidad</b> del asistente elegido.
                    </a>
                </div>
                </div>
            </div>
        </div>

    <!-- footer --> 
    
    <br><br><br><br><br><br><br><br><br>
    
        <section>
        <footer class="text-center text-lg-start bg-white text-muted" id="footer1" >
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" id="footer1">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <h4 class="text-dark fw-bold">Datos Importantes:</h4>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div id="footer3">
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="footer3">
            <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
            <div class="row mt-3">
        <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4 text-dark">
                    <i class="fas fa-gem me-3 text-secondary "></i>Titulo
                </h6>
                <p class="text-dark">
                    Pagina oficial Universidad Catolica de temuco
                </p>
            </div>
        <!-- Grid column -->

        <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4 text-dark">
                DIRECCIONES CAMPUS
                </h6>
                <p class="text-decoration-underline text-dark fw-semibold">CAMPUS SAN FRANCISCO</p>
                <p class="text-dark">
                    Calle: Manuel Montt 56
                    Fono: +56 45 2 205 470
                </p>
                <p class="text-decoration-underline text-dark fw-semibold">CAMPUS SAN JUAN PABLO II</p>
                <p class="text-dark">
                    Rudecindo Ortega 02950
                    Fono: +56 45 2 553 978
                </p>
            </div>
        <!-- Grid column -->

        <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4 text-dark">
                TELÉFONOS DE UTILIDAD
                </h6>
                <p class="text-decoration-underline text-dark fw-semibold">BIENESTAR ESTUDIANTIL</p>
                <p class="text-dark">
                    Calle: Manuel Montt 56
                    Fono: +56 45 2 205 424
                </p>
            <p class="text-decoration-underline text-dark fw-semibold">PRENSA INSTITUCIONAL</p>
                <p class="text-dark">
                Avenida Alemania 0211
                Fono: +56 45 2 205 428
                </p>
            </div>
        <!-- Grid column -->

        <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4 text-dark">CORREOS</h6>
            <p class="text-decoration-underline text-dark fw-semibold">Oficina de Informaciones</p>
                <p class="text-dark">
                Informaciones: info@uct.cl
                </p>
                <p class="text-decoration-underline text-dark fw-semibold">Soporte Sistemas</p>
                <p class="text-dark">
                soportesistemas@uct.cl
                </p>
                <p class="text-decoration-underline text-dark fw-semibold">Becas y Créditos Beneficios Estudiantiles</p>
                <p class="text-dark">
                bienestarestudiantil@uct.cl
                </p>
            </div>
            </div>
        </div>
        </section>
        <div class="text-center p-4" id="footer2">
        Portal del Estudiante es un proyecto realizado por la Dirección de Desarrollo de Sistemas UCTemuco.
        Soporte, comentarios, errores reportarlos al correo: soportesistemas@uct.cl.
        </div>
    
        </footer>
    </section>

        <script src = "{{ asset('js/app.js') }}" type = "text/js"></script>
</body>
</html>