<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $servidor = mysqli_connect("localhost", "root", "");
    mysqli_select_db($servidor,"ejemplo5php");

    // INSERT INTO `usuarios` (`nick`, `correo`, `contra`, `admin`) VALUES ('lolito', 'josemi@yaho.com', '1515', '0');
    //$add = "SELECT * FROM usuarios WHERE nick='".$_POST['nick']."' AND contra='".$_POST['contra']."'";
    
    try {
        $add = "INSERT INTO usuarios (nick, correo, contra, admin) VALUES ('".$_POST['nombre']."','".$_POST['nick']."','".$_POST['correo']."','".$_POST['contra']."');";
        print($add);
        mysqli_query($servidor, $add);
    } catch (Exception $e) {
        echo '<br>Excepción capturada: <br>';
        print ("alert('Hello! I am an alert box!!');");
    }
?>
</body>
</html>