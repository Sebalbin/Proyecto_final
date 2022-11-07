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
                            <li><a class="dropdown-item" href="#">senderismo</a></li>
                            <li><a class="dropdown-item" href="#">bungee</a></li>
                            <li><a class="dropdown-item" href="#">tour</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class="btn btn-primary" href="sesion.php" role="button">Inicio/Registro</a>
                </div>
            </div>
        </nav>

      
      </div>

      <div class="row">
		<div class="col">
			<section class="ingreso" style="padding-right: 4%;">
				<!--  creacion de los inputs que reciben los datos pedidos y la imagen de perfil-->
	    	<h1>Ingreso Usuario</h1>
		    <input class="cuadros_reg" type="text" name="nick" id="nick_ingreso" placeholder="Nickname">
		    <input class="cuadros_reg" type="password" name="contra" id="contra_ingreso" placeholder="Contraseña">
		    
				<!--  opcionales comunes de terminos y condiciones o si tienen cuenta-->
				<center>
					<p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
			    <input class="btn btn-primary" id="reg" onclick="alert('Ingreso exitoso.')" type="submit" value="INGRESO">
					<center> <p> <a href="#">¿No tengo Cuenta?</a> </p> 
				</center>
	  	</section>
		</div>

		<div class="col">
			<section class="Registro" style="padding-right: 4%;">
				<!--  creacion de los inputs que reciben los datos pedidos y la imagen de perfil-->
	    	<h1>Formulario Registro</h1>
		    <input class="cuadros_reg" type="text" name="nombres" id="nombres" placeholder="Nombre completo">
		    <input class="cuadros_reg" type="text" name="nick" id="nick" placeholder="Nickname">
		    <input class="cuadros_reg" type="email" name="correo" id="correo" placeholder="Correo: ejemplo@gmail.com">
		    <input class="cuadros_reg" type="password" name="contra" id="contra" placeholder="Contraseña">
		    
				INGRESE FOTO DE PERFIL:
				<input type="file" name="imagen">
	
				<!--  opcionales comunes de terminos y condiciones o si tienen cuenta-->
				<center>
					<p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
			    <input class="btn btn-primary" id="reg" onclick="alert('Registrado con exito.')" type="submit" value="REGISTRAR">
					<p> <a href="#">¿Ya tengo Cuenta?</a> </p> 
				</center>
	  	</section>
		</div>
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
    

    
</body>
</html>