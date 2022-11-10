<?php

  error_reporting(0);
  error_reporting(E_ERROR );
  session_start();

  $file = fopen("funtions/sesion.txt", "r");
  if ( fgets($file) == "1"){
    $_SESSION['auten']=1;
  }else{
    $_SESSION['auten']=0;
  }
  fclose($file);
?>


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
                <a class="nav-link" href="contactanos.php">Contacto</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Actividad
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="parapente.php">parapente</a></li>
                <li><a class="dropdown-item" href="senderismo.php">senderismo</a></li>
                <li><a class="dropdown-item" href="bungee.php">bungee</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
            <button type='button' class='btn btn-primary'><?php print($_SESSION['nick']); ?> </button>
            </li>
          </ul>
          <?php
              if ($_SESSION['auten'] == 1){  print("<a class='btn btn-primary' href='funtions/logout.php' role='button' style='background: rgb(211, 172, 14);'>Cerrar sesion</a>"); } 
            else{  print("<a class='btn btn-primary' href='sesion.php' role='button' style='background: rgb(211, 172, 14);'>Inicio/Registro</a>"); }
          ?>
        </div>
      </div>
    </nav>
  </div>

  <div style="margin-left: 15%; margin-right: 15%; box-shadow: 0px 0px 150px rgb(211, 172, 14);">

    <!-- carrusel de imagenes -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" style="height: 300px;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.trekkingchile.com/es/wp-content/uploads/sites/4/2021/02/senderismo-y-salud.jpg" class="d-block w-100" alt="senderismo" style="height: 300px;">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="color: white;">Recorre hermosos caminos</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://www.santanderalextremo.com/wp-content/uploads/2020/12/Parapente-en-la-Mesa-de-Ruitoque-2-min.jpg" class="d-block w-100" alt="..." style="height: 300px;">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="color: white;">Enfrenta tus miedos.</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://2.bp.blogspot.com/-VzrfJ8cuFL8/Vw1qsZWpidI/AAAAAAAABU0/wOAYojFVarsyVMoFpN_-IgN2BLjcWprPgCK4B/s1600/puenting3.jpg" class="d-block w-100" alt="..." style="height: 300px;">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="color: white;">Lanzate a la aventura</h3>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Contenido de la pagina -->
    <div style="margin-left: 10%; margin-right: 10%; margin-top: 50px;">
      <h1 style="text-align: center;">SpeedTour</h1> <br>

      <p>En nombre de SpeedTour les damos la más sincera bienvenida, esperamos que encuentren toda la información que necesiten acerca de nuestras actividades. Queremos dar las gracias a nuestros pilotos y guias profesionales, que, con su trabajo y organización, llegan puntualmente, cada día, a su lugar para brindarles una inolvidable experiencia, sobre todo, gracias a ustedes, nuestros clientes, por la confianza de todos estos años.</p>

      <p> Somos una empresa especialista en turismo enfocada en guiar a las personas a las mejores aventuras de su vida, con los profesionales mas aptos para todos los tipos de actividades que ofrecemos. </p>
      <p> tenemos sedes por el pais para guiarte por los mas reconditos y maravillosos lugares que se puedan encontrar en tierra colombiana. con una experiencia de años en visitas guiadas por las rutas que manejamos, siendo una de las empresas que mejor seguridad ofrece al momento.</p>
      <p>¿Cómo puedo hacer una reservación y volar después? <br> Puedes hacer tu reserva hoy , debes pagar el 50% del valor total , debes anunciar con 2 días de anticipación tu fecha de reservacion y deberás cancelar el otro 50% restante del valor total directamente en el sitio.</p>
      <p>¿Puedo llevar mis mascotas? <br> Por supuesto que sí, somos una empresa PetFriendly</p>

    </div>

    <!-- PIE DE PAGINA -->
    <footer class="text-center text-lg-start text-muted" style="background-color: rgb(210, 210, 210)">
      
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i> <br>SpeedTour
              </h6>
              <p>
                informacion contenida y de informacion al publico.
              </p>
            </div>
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                <br>  Actividades:
              </h6>
              <p>
                <a href="#!" class="text-reset">paracaidismo</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Senderismo</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Bungee</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                <br>Horarios servicio.
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
                <br>Contacto
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
        <a class="text-reset fw-bold" href="localhost/htdocs/Proyecto_final/index.php">SpeedTour</a>
      </div>
      <!-- Copyright -->
    </footer>
  </div>
    

    <!-- <div class="Cuerpo" style="margin-left: 10%; margin-right: 10%;">
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
    </button> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
</body>
</html>