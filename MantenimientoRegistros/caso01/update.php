<?php
    include("conexion.php");

    $nombre = $_POST["nombre"];
    $serie = $_POST["serie"];
    $marca = $_POST["marca"];
    $pais = $_POST["pais"];
    $id = $_POST["idProducto"];

    echo $nombre,$serie,$marca,$pais,$id;

    $sql = "update producto set nombre = '$nombre', serie = '$serie', idmarca = '$marca', idpais = '$pais' where idproducto = '$id'";
    $result = mysqli_query($con,$sql);

    if($result){
        header("location: listaProductos.php");
    }else{
        echo "Error en el ingreso",mysqli_error();
    }

?>