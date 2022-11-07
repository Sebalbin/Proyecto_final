<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="script.js"></script>
    <title>SpeedTour</title>

</head>
<body>

  <div class="cabecera">

    <!-- Creacion de botones guias-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">SpeedTour</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactanos.html">Contacto</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Actividad
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="parapente.html">parapente</a></li>
                <li><a class="dropdown-item" href="senderismo.html">senderismo</a></li>
                <li><a class="dropdown-item" href="bungee.html">bungee</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <a class="btn btn-primary" href="sesion.php" role="button">Inicio/Registro</a>
        </div>
      </div>
    </nav>

    <div class="Cuerpo" style="margin-left: 10%; margin-right: 10%;">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="height: 200px;">
      <div class="carousel-item active">
        <img src="imagenes/Parapente_encabezado.PNG" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/prueba.PNG" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/Parapente_encabezado.PNG" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

    <div style="margin: 10%">
      <h1 style="text-align: center;">SpeedTour</h1> <br>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur felis urna, posuere ut elit a, rutrum egestas lectus. Fusce eleifend erat at libero ornare dignissim. Curabitur posuere egestas pulvinar. Morbi egestas sem sapien, lobortis venenatis felis varius nec. Sed pellentesque scelerisque nisi, eu auctor lectus faucibus quis. In lectus sem, pretium vel lorem non, finibus commodo nisl. Morbi vitae ex ultricies, hendrerit leo ullamcorper, venenatis est. Donec eu ante commodo, lobortis nunc laoreet, aliquet libero. Pellentesque at viverra ligula. Vivamus gravida, enim molestie interdum sodales, est est venenatis nisi, eu hendrerit lorem eros non dui.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur felis urna, posuere ut elit a, rutrum egestas lectus. Fusce eleifend erat at libero ornare dignissim. Curabitur posuere egestas pulvinar. Morbi egestas sem sapien, lobortis venenatis felis varius nec. Sed pellentesque scelerisque nisi, eu auctor lectus faucibus quis. In lectus sem, pretium vel lorem non, finibus commodo nisl. Morbi vitae ex ultricies, hendrerit leo ullamcorper, venenatis est. Donec eu ante commodo, lobortis nunc laoreet, aliquet libero. Pellentesque at viverra ligula. Vivamus gravida, enim molestie interdum sodales, est est venenatis nisi, eu hendrerit lorem eros non dui.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur felis urna, posuere ut elit a, rutrum egestas lectus. Fusce eleifend erat at libero ornare dignissim. Curabitur posuere egestas pulvinar. Morbi egestas sem sapien, lobortis venenatis felis varius nec. Sed pellentesque scelerisque nisi, eu auctor lectus faucibus quis. In lectus sem, pretium vel lorem non, finibus commodo nisl. Morbi vitae ex ultricies, hendrerit leo ullamcorper, venenatis est. Donec eu ante commodo, lobortis nunc laoreet, aliquet libero. Pellentesque at viverra ligula. Vivamus gravida, enim molestie interdum sodales, est est venenatis nisi, eu hendrerit lorem eros non dui.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur felis urna, posuere ut elit a, rutrum egestas lectus. Fusce eleifend erat at libero ornare dignissim. Curabitur posuere egestas pulvinar. Morbi egestas sem sapien, lobortis venenatis felis varius nec. Sed pellentesque scelerisque nisi, eu auctor lectus faucibus quis. In lectus sem, pretium vel lorem non, finibus commodo nisl. Morbi vitae ex ultricies, hendrerit leo ullamcorper, venenatis est. Donec eu ante commodo, lobortis nunc laoreet, aliquet libero. Pellentesque at viverra ligula. Vivamus gravida, enim molestie interdum sodales, est est venenatis nisi, eu hendrerit lorem eros non dui.</p>

    </div>
    
  </div>
        
  <footer class="text-center text-lg-start bg-light text-muted">
    
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>UNIVERSIDAD DE ANTIOQUIA
            </h6>
            <p>
              informacion contenida y de informacion al publico.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              facultades
            </h6>
            <p>
              <a href="#!" class="text-reset">Ingenieria</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Ciencias exactas</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Quimica</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Educacion Fisica</a>
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Horarios servicio.
            </h6>
            <p>
              <a href="#!" class="text-reset">lunes-viernes: 6AM-8PM</a>
            </p>
            <p>
              <a href="#!" class="text-reset">sabado: 6AM-6PM</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Domingo-Festivos: 8AM-4PM</a>
            </p>
          </div>
          
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contacto
            </h6>
            <p><i class="fas fa-home me-3"></i> Medellin, Colombia</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              udea@edua.edu.co
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
</body>
</html>