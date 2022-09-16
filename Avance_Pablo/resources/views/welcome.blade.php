<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="{{ asset('uct.jpg') }}">
    <script src="../js/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>
        body{
          background-image: url(31.jpg);
          background-repeat: no-repeat;
        }
        .header {
            color: #36A0FF;
            font-size: 27px;
            padding: 10px;
         }

         footer{
          height: 100%;
         }
        .sect1{
          background-color: rgba(255, 255, 255, .3);
        }


        #footer1{
          background-image: radial-gradient(circle at 87.5% 12.5%, #b3edfb 0, #b3edfb 50%, #b3edfb 100%);
        }

        #carouselExampleControls{
          margin-top:50px;
        }
        #img1{
          width: 500px;
          height: 300px;
          
        }
        #img2{
          width: 500px;
          height: 300px;
        }
        #img3{
          width: 500px;
          height: 300px;
        }
        #text{
            margin-top:50px;
            margin-left:50px;
            background-color: rgba(255, 255, 255, .3);

        }


    
       
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://www.uct.cl/">
          <img src="{{ asset('uct.jpg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
              Universidad Catolica de Temuco
          </a>
        </div>
        <a class="navbar-brand text-center">PORTAL DEL ESTUDIANTE</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://educa.blackboard.com/">EducaBlackboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.uct.cl/calendario-academico/">Calendario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Atras</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="sect1">
        <br>
        <h3 class="text-uppercase text-center">LOGIN</h3>
        <form action="" class="form-inline d-flex justify-content-center flex-column flex-md-row">
            <div class="form-group my-2">
                <label for="" class="mx-2">RUN:</label>
                <input type="text" class="form-control" placeholder="25175341-K">
            </div>

            <div class="form-group mx-2 my-2">
                <label for="" class="mx-2">Contraseña:</label>
                <input type="password" class="form-control">
            </div>

            <div class="form-group mx-2 my-4">
                <button class="btn bg-dark text-white " type="submit">Entrar
                </button>
            </div>

        </form>
    </section>
    <div class="position-relative">
      <div class=" w-25 position-absolute" id="text"> 
        <p class="text-black text-center fw-bold ">Jamás te enviaremos, ni a nombre de la Universidad Católica de Temuco ni de nuestros administrativos, correos electrónicos, mensajes de texto, u otro tipo de mensajes electrónicos que soliciten información personal acerca de tu cuenta.</p> 
      </div>
    </div>
    
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img src="4.jpg" class="d-block img-fluid rounded float-end img-thumbnail"id="img1">
        </div>
      <div class="carousel-item" data-bs-interval="2000">
          <img src="dos.jpg" class="d-block  img-fluid rounded float-end img-thumbnail" id="img2">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
          <img src="estatutos-generales.jpg" class="d-block  img-fluid rounded float-end img-thumbnail"id="img3">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
          <img src="oferta-formativa.jpg" class="d-block img-fluid rounded float-end img-thumbnail"id="img3">
      </div>
      </div>
  </div>

    <!-- Footer -->
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
>
    <div class="text-center p-4" id="footer2">
    Portal del Estudiante es un proyecto realizado por la Dirección de Desarrollo de Sistemas UCTemuco.
    Soporte, comentarios, errores reportarlos al correo: soportesistemas@uct.cl.
    </div>
 
  </footer>
  </section>


    

</body>
</html>