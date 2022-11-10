<?php

$servidor = mysqli_connect("localhost", "root", "");
mysqli_select_db($servidor,"ejemplo5php");
$auten=false;


$consulta = "SELECT * FROM usuarios WHERE nick='".$_POST['nick']."' AND contra='".$_POST['contra']."'";
$respuesta = mysqli_query($servidor, $consulta);
$usuario = mysqli_fetch_assoc($respuesta);
print($usuario['admin']);
if (mysqli_num_rows($respuesta)>0){
    $auten = true;
}

if ($auten){
    session_start();

    $_SESSION['nick'] = $_POST['nick'];
    $_SESSION['auten'] = 1;
    $_SESSION['admin'] = $_POST['admin'];
    header( "Location: ../index.php" );

    // creacion de archivo para verificar sesion
    $file = fopen("sesion.txt", "w");
    fwrite($file,"1\n");
    fwrite($file,$usuario['admin']);
    fclose($file);
}
else{
    header( "Location: ../index.php" );
}

?>

