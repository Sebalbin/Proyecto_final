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
  if ( fgets($file) == "1"){
    $_SESSION['admin']=1;
  }else{
    $_SESSION['admin']=0;
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

<script >
  
</script>

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

    <!-- Cuerpo de la pagina -->
    <div style="margin-left: 15%; margin-right: 15%; box-shadow: 0px 0px 150px rgb(211, 172, 14);">

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
    
        <div style="margin: 10%">

          <!-- exclusivo admin -->  
          <!-- AGREGAR EVENTO NUEVO -->

          <script type="text/javaScript">
            var x = <?php echo $_SESSION['admin'] ?>;
            if (x===1){
              document.write("<div style='border:2px solid yellow;margin-left: 10%;margin-right: 10%; box-shadow: 0px 0px 50px rgb(211, 172, 14);' >");
              document.write("<form action='funtions/add_parapente.php' method='post' style='margin: 5%;'>");
              document.write("<CENTER><h5>AGREGAR NUEVO EVENTO.</h5></CENTER> ");
              document.write("<p>Link imagen: <input type='text' id='_link' name='_link' ></p>");
              document.write("<p>lugar: <input type='text' id='_lugar' name='_lugar' ></p>");
              document.write("<p>valor 1: <input type='text' id='_valor1' name='_valor1'></p>");
              document.write("<p>valor 2: <input type='text' id='_valor2' name='_valor2'></p>");
              document.write("<p>valor 3: <input type='text' id='_valor3' name='_valor3'></p>");
              document.write("<p>contenido: <input type='text' id='contenido' name='contenido' style='width: 80%; height: 20px'></p>");
              document.write("<center><input class='btn btn-primary' id='reg' type='submit' value='añadir' style='margin-top: 10%;'></center> ");
              document.write("</form>");
              document.write("</div>");
            }
            
          </script>
          

          <!-- LECTURA DE ARCHIVO/EVENTOS -->
          <?php

            $servidor = mysqli_connect("localhost", "root", "");
            mysqli_select_db($servidor,"parapentes");
            $consulta = "SELECT * FROM lugares";
            $respuesta = mysqli_query($servidor, $consulta);

            while( $lugar = mysqli_fetch_assoc($respuesta) ){
                print( "<div>" );
                print( "<dl class='row'>" );
                print( "<dt class='col-md-6'><img  id='parapente_1' style='width:100%;'  src='".$lugar['link']."' alt='Facultad x'></dt>" ); 
                print( "<dd class='col-md-6'>" );
                print( "<h5> <b>".$lugar['lugar']."</b> </h5>" );
                print( "<p>".$lugar['valor1']."<br>" );
                print( $lugar['valor2']."<br>" );
                print( $lugar['valor3']."<br>" );
                print( $lugar['contenido']."<br></p>" );
                print( "</dd>" );
                print( "</dl>" );
                print( "</div>" );
            }
          ?>

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
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>