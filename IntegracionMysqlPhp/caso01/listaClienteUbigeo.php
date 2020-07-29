<?php
    include('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Lista de clientes por Ubigeo</h1>

        <?php
            $sqlUbigeo = "select * from "
        ?>

        <table class="table">
        <thead>
            <tr>
                <th scope="col">Id Cliente</th>
                <th scope="col">Correo</th>
                <th scope="col">Fecha Registro</th>
                <th scope="col">Login</th>
                <th scope="col">Password</th>
                <th scope="col">Dirccion</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "select * from cliente";
                $result = mysqli_query($con,$sql);

                while ($fila = mysqli_fetch_row($result)) {
            ?>

            <tr>
                <td><?php echo $fila[0];?></td>
                <td><?php echo $fila[1];?></td>
                <td><?php echo $fila[2];?></td>
                <td><?php echo $fila[3];?></td>
                <td><?php echo $fila[4];?></td>
                <td><?php echo $fila[5];?></td>
                <td><?php echo $fila[6];?></td>
            </tr>

            <?php
                }


            ?>
        </tbody>
        </table>
    </div>
</body>
</html>