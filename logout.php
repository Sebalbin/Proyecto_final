<?php
    session_start();

    $file = fopen("sesion.txt", "w");
    fwrite($file,"0");
    fclose($file);

    session_destroy();
    header('Location: index.php')

?>