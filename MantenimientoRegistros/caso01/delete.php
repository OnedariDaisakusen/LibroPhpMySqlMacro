<?php
    include("conexion.php");

    $id = $_GET["id"];


    $sql = "delete from producto where idproducto = '$id'";
    $result = mysqli_query($con,$sql);

    if($result){
        header("location: listaProductos.php");
    }else{
        echo "Error en el ingreso",mysqli_error();
    }

?>