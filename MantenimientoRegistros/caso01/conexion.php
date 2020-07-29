<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $bd = 'sistema_delivery';

    $con = mysqli_connect($host,$user,$pass,$bd);

    if(!$con) echo "Error en la conexion";
?>