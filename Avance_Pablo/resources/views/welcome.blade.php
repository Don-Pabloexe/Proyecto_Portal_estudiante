<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="{{ asset('uct.jpg') }}">
    <script src="../js/sweetalert2.all.min.js"></script>
    <style>
        .header {
            color: #36A0FF;
            font-size: 27px;
            padding: 10px;
    }
        .sect1{
            background-image: linear-gradient(180deg, #2aa79a 0, #17a7a3 8.33%, #00a6ab 16.67%, #00a6b3 25%, #00a5ba 33.33%, #00a4c1 41.67%, #08a3c7 50%, #23a1cc 58.33%, #37a0d0 66.67%, #489ed3 75%, #589bd5 83.33%, #6799d5 91.67%, #7696d5 100%);
        }

        #footer1{
            background-image: radial-gradient(circle at 58.65% 26.25%, #ffff6e 0, #fff464 16.67%, #ffd95b 33.33%, #f2bd53 50%, #dea24c 66.67%, #cb8b47 83.33%, #b97842 100%);
        }

    
       
    </style>
</head>

<body>
    <header class="content">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="https://www.uct.cl/">
                <img src="{{ asset('uct.jpg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                Universidad Catolica de Temuco
            </a>
        </nav>
    
    </header>

    <section class="sect1">
        <br>
        <h3 class="text-uppercase text-center">LOGIN</h3>
        <form action="" class="form-inline justify-content-center flex-column flex-md-row">
            <div class="form-group my-2">
                <label for="" class="mx-2">RUN:</label>
                <input type="text" class="form-control" placeholder="25175341-K">
            </div>

            <div class="form-group my-2">
                <label for="" class="mx-2">Contraseña:</label>
                <input type="password" class="form-control">
            </div>

            <div class="form-group mx-2 my-2">
                <button class="btn bg-dark text-white" type="submit">Entrar
                </button>
            </div>

        </form>
    </section>
    
    <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="4.jpg" class="d-block w-100" alt="bootstrap" 
                                width="620px" height="450px">
                            </div>
                            <div class="carousel-item">
                                <img src="dos.jpg" class="d-block w-100" alt="..." 
                                width="620px" height="450px">
                            </div>
                            <div class="carousel-item">
                                    <img src="js.png" class="d-block w-100" alt="..."  width="620px" height="450px">
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
                </div>
            </div>
    </div>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted" id="footer1" >
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" id="footer1">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <h4>Secciones:</h4>
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
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Titulo
          </h6>
          <p>
            Pagina oficial Universidad Catolica de temuco
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" id="footer2">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    


<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>