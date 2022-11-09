<?php
  $file = fopen("sesion.txt", "r");
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

<style rel="stylesheet" type="text/css">
  .col-md-6{
      margin-top: 50px;
  }
</style>

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
              </ul>
              <?php
                if ($_SESSION['auten'] == 1){  print("<a class='btn btn-primary' href='logout.php' role='button' style='background: rgb(211, 172, 14);'>Cerrar sesion</a>"); } 
                else{  print("<a class='btn btn-primary' href='sesion.php' role='button' style='background: rgb(211, 172, 14);'>Inicio/Registro</a>"); }
              ?>
            </div>
            </div>
        </nav>
    </div>

    <!-- Cuerpo de la pagina -->
    <div style="margin-left: 15%; margin-right: 15%; box-shadow: 0px 0px 50px #000;">

        <!-- Carrusel -->
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

        <!-- Contenido -->
        <dl class="row" style="margin-left: 10%; margin-right: 10%;">
            <dt class="col-md-6"><img  id="parapente_1" style="width:100%;"  src="https://www.despejandodudas.co/images/Imgs_2/Nube_Extrema_4.jpg" alt="Facultad x"></dt>
            <dd class="col-md-6">
                <h5> <b>San felix.</b> </h5>
                <p>
                    - 15 minutos - fotos - 1 video => 150.000$ <br>
                    - 20 minutos - fotos - 1 video => 180.000$ <br>
                    - 30 minutos - fotos - 2 video => 250.000$ <br>
                    Kilómetro 6 Vía San Pedro de los Milagros, San Félix, Bello,  Antioquia
                </p>
            </dd>

            <dt class="col-md-6"><img  id="parapente_2" style="width:100%;"  src="https://adrenalinecolombia.com/wp-content/uploads/2021/07/Parapente-Cerca-a-Medellin-Cocorna_-Adrenaline-colombia-1-870x555.png" alt="Facultad x"></dt>
            <dd class="col-md-6">
                <h5> <b>Cocorna.</b> </h5>
                <p>
                  - 15 minutos - fotos - 1 video => 120.000$ <br>
                  - 20 minutos - fotos - 1 video => 160.000$ <br>
                  - 30 minutos - fotos - 2 video => 210.000$ <br>
                  Cocorná es uno de los pueblos del oriente antioqueño, y está apenas a dos horas de Medellín.
                </p>
            </dd>

            <dt class="col-md-6"><img  id="imagen_facultades" style="width:100%;"  src="https://hotelesensangil.com/wp-content/uploads/2021/12/Parapente-Canon-del-chicamocha-9.jpg" alt="Facultad x"></dt>
            <dd class="col-md-6">
                <h5> <b>El Cañón de Chicamocha (Santander).</b> </h5>
                <p>
                  - 15 minutos - fotos - 1 video => 120.000$ <br>
                  - 20 minutos - fotos - 1 video => 160.000$ <br>
                  - 30 minutos - fotos - 2 video => 210.000$ <br>
                  A solo 54 kilómetros de Bucaramanga, entre Aratoca y Piedecuesta se encuentra el impresionante Cañón de Chicamocha. ¿Qué lo hace tan especial? Es el segundo cañón más grande del mundo, con más de 108.000 hectáreas y 2.000 metros de profundidad.</p>
            </dd>

            <dt class="col-md-6"><img  id="imagen_facultades" style="width:100%;"  src="http://blogimagestc.s3.amazonaws.com/Parapente%20sopo.png" alt="Facultad x"></dt>
            <dd class="col-md-6">
                <h5>Embalse de Tominé (Cundinamarca)</h5>
                <p>
                  - 15 minutos - fotos - 1 video => 120.000$ <br>
                  - 20 minutos - fotos - 1 video => 160.000$ <br>
                  - 30 minutos - fotos - 2 video => 210.000$ <br>
                  Desde el municipio se debe dirigir al sitio de despegue que está ubicado a 4.5 km de Sopó, en la vía al Parque Pionono.
                </p>
            </dd>
        </dl>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>