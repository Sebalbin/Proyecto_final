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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css" />
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <title>SpeedTour</title>

    
</head>

<style type="text/css" rel="stylesheet" >
    .container,.row{
        margin-top: 20px;
    }

    .col{
        margin: 2%;
        text-align:justify;
    }

    .col-md-3, .col-md-9{
        margin-top:2%;
    }

    .btn-primary{
        color: white;
        background:green;
        border: 0px;
    }
    .btn-primary:hover{
        color: green;
        background:white;
    }

    /* Recuadros de la pagina de registro*/
    .Registro {
        width: 70%;
        background: rgb(66, 65, 64);
        padding: 30px;
        margin: auto;
        margin-top: 50px;
        margin-bottom: 100px;
        border-radius: 20px;
        font-family: 'calibri';
        color: white;
        box-shadow: 0px 0px 50px #000;
    }
 
    .ingreso {
        width: 300px;
        /* height: 60%; */
        background: rgb(66, 65, 64);
        padding: 30px;
        margin: auto;
        margin-top: 50px;
        margin-bottom: 100px;
        border-radius: 20px;
        font-family: 'calibri';
        color: white;
        box-shadow: 0px 0px 50px #000;
    }

    .cuadros_reg {
        width: 100%;
        background: #ffffff;
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 16px;
        border: 1px solid #1f53c5;
        font-family: 'calibri';
        font-size: 12px;
        color: black;
    }

    #reg{
        color: black;
        background:white;
        border: 1px solid white;
    } 
    #reg:hover{
        color: white;
        background:rgb(211, 172, 14);;
        border: 1px solid white;
    }
</style>

<body style="background-image: url('imagenes/madera.PNG');">

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

  <div class="row">
		<div class="col">
			<form action="login.php" method="post" class="ingreso" style="padding-right: 4%;">
				<!--  creacion de los inputs que reciben los datos pedidos y la imagen de perfil-->
        <h1>Ingreso Usuario</h1>
        <input class="cuadros_reg" type="text" name="nick" id="nick_ingreso" placeholder="Nickname">
        <input class="cuadros_reg" type="password" name="contra" id="contra_ingreso" placeholder="Contraseña">
        
        <!--  opcionales comunes de terminos y condiciones o si tienen cuenta-->
        <center>
          <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
          <input class="btn btn-primary" id="reg" type="submit" value="INGRESO">
          <center> <p> <a href="#">¿No tengo Cuenta?</a> </p> 
        </center>
      </form>
    </div>

    <div class="col">
      <form action="registro.php" method="post" class="Registro" style="padding-right: 4%;">
        <!--  creacion de los inputs que reciben los datos pedidos y la imagen de perfil-->
        <h1>Formulario Registro</h1>
        <input class="cuadros_reg" type="text" name="nombre" id="nombre" placeholder="Nombre completo">
        <input class="cuadros_reg" type="text" name="nick" id="nick" placeholder="Nickname">
        <input class="cuadros_reg" type="email" name="correo" id="correo" placeholder="Correo: ejemplo@gmail.com">
        <input class="cuadros_reg" type="password" name="contra" id="contra" placeholder="Contraseña">
        

        <!--  opcionales comunes de terminos y condiciones o si tienen cuenta-->
        <center>
          <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
          <input class="btn btn-primary" id="reg" type="submit" value="REGISTRAR">
          <p> <a href="#">¿Ya tengo Cuenta?</a> </p> 
        </center>
      </form>
		</div>
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
                <i class="fas fa-gem me-3"></i>SpeedTour
              </h6>
              <p>
                informacion contenida y de informacion al publico.
              </p>
            </div>
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Actividades:
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
        <a class="text-reset fw-bold" href="localhost/htdocs/Proyecto_final/index.php">SpeedTour</a>
      </div>
      <!-- Copyright -->
    </footer>
    

    
</body>
</html>