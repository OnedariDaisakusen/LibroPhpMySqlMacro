<?php
    include("conexion.php");

    $nombre = $_POST["nombre"];
    $serie = $_POST["serie"];
    $marca = $_POST["marca"];
    $pais = $_POST["pais"];

    $sql = "insert into producto(nombre,serie,idmarca,idpais) values('$nombre','$serie','$marca',$pais)";
    $result = mysqli_query($con,$sql);

    if($result){
        header("location: listaProductos.php");
    }else{
        echo "Error en el ingreso",mysqli_error();
    }

?>