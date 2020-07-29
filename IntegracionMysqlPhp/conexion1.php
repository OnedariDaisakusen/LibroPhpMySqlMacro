<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $conexion = mysqli_connect('localhost','root','');
        if($conexion) echo "Conexion Correcta \n";

        $baseDatos = mysqli_select_db($conexion,'sistema_delivery');
        if($baseDatos) echo "Base de Datos Correctas \n";

        $sql = "select * from pais";
        $result = mysqli_query($conexion,$sql);
        if($result) echo "Query Correcto \n";

        echo mysqli_result(1,1,$result);

        while ($fila = mysqli_fetch_row($result)) {
            echo $fila["nombre"];
        }


    ?>
</body>
</html>