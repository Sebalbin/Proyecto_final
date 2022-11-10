<?php
    $servidor = mysqli_connect("localhost", "root", "");
    mysqli_select_db($servidor,"ejemplo5php");

    //CONTROL DE ERROR EN EL REGISTRO!
    try {
        $add = "INSERT INTO usuarios (nick, correo, contra, admin) VALUES ('".$_POST['nombre']."','".$_POST['nick']."','".$_POST['correo']."','".$_POST['contra']."');";
        mysqli_query($servidor, $add);
    } catch (Exception $e) {
        echo '<script>alert("Ha ocurrido un error, el Nick/correo ya esta en uso!")</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>error</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css" />
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</head>
<body>
    <CENTER style="margin-top: 100px;">
        <a href="sesion.php" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">REGRESAR.</a>  
    </CENTER>
    
</body>
</html>