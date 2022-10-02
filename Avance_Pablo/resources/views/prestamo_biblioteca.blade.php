<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestamo Biblioteca</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- Styles -->
    <style>
        body {
            background-image: url("{{ asset('1077409.png') }} ");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover; 
        }
        footer{
          height: 100%;
         }

    </style>
</head>
<body>
    <nav class = "navbar navbar-dark bg-dark">
                <img href = "#" src = "Universidad_Catolica_de_Temuco_Logo_Vertical.png" alt = "" width = "130" height = "45" aria-controls = "sidebar">
                <div>
                    <a href = "https://www.facebook.com/canaluctemuco/%22%3E"> <img href = "#" src = "{{ asset('fb.png') }}" class = "nav-r2" width = "32"></a>
                    <a href = "https://www.instagram.com/uctemuco/?hl=es-la%22%3"> <img href = "#" src = "{{ asset('ig.png') }}" class = "nav-r2" width = "32"></a>
                    <a href = "ruta"><img href = "#" src = "{{ asset('logout.png') }}" class = "nav-r2 ml-4" width = "34"></a>
                </div>
    </nav>
    
    <br>
    <div class="d-flex justify-content-center">
        <div class="alert alert-warning text-center col-5 " role="alert" >
        
            Estimado(a) "Nombre"  

            Has solicitado los siguientes recursos en biblioteca:
        </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table">
            <thead class=" table-dark">
                <tr>
                <th scope="col">Material</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Fecha Prestamo</th>
                <th scope="col">Fecha devolucion</th>
                <th scope="col">Biblioteca</th>
                </tr>
            </thead>
            <tbody class="table-primary">
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                
               
            </tbody>
        </table>
    </div>

    <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section>
  <footer class="text-center text-lg-start bg-white text-muted" id="footer1" >
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" id="footer1">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block ">
        <h4 class="text-dark">Datos Importantes:</h4>
      </div>
      <!-- Left -->

      <!-- Right -->
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
</body>
</html>