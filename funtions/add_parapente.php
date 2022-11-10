<?php

    // para eliminar los impresiones de warnings
    error_reporting(0);
    error_reporting(E_ERROR );


    $servidor = mysqli_connect("localhost", "root", "");
    mysqli_select_db($servidor,"parapentes");

    // filtro de error
    try {
        $add = "INSERT INTO lugares (link, lugar, valor1, valor2, valor3, contenido)  VALUES ('".$_POST['_link']."','".$_POST['_lugar']."','".$_POST['_valor1']."','".$_POST['_valor2']."','".$_POST['_valor3']."','".$_POST['contenido']."');";
        mysqli_query($servidor, $add);
    } catch (Exception $e) {
        echo '<script>alert("Ha ocurrido un error, DATOS ERRONEOS, ya estan en uso!")</script>';
        mysqli_query($servidor, $add);
    }
    header('Location: ../parapente.php');

?>