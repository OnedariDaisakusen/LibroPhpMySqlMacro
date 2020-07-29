<?php
    include('conexion.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
        <h1>Mantenimiento de producto</h1>
        <div class="row">
            <a href="registraProducto.php" class="btn btn-primary">Registrar Producto</a>
        </div>

        <?php
            $sql = "select pr.idproducto, pr.nombre as producto, pr.serie, m.nombre, pa.nombre as marca from producto pr join pais pa on pr.idpais = pa.idpais join marca m on m.idmarca = pr.idmarca order by pr.idproducto asc";
            $result = mysqli_query($con,$sql);
        ?>

        <table class="table mt-2">
            <thead>
                <tr>
                    <th scope="col">Id Producto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($fila = mysqli_fetch_row($result)) {
                ?>

                        <tr>
                            <td><?php echo $fila[0];?></td>
                            <td><?php echo $fila[1];?></td>
                            <td><?php echo $fila[2];?></td>
                            <td><?php echo $fila[3];?></td>
                            <td><?php echo $fila[4];?></td>
                            <td><a href="actualizarProducto.php?id=<?php echo $fila[0]; ?>" class="btn btn-info">Modificar</a></td>
                            <td><a href="delete.php?id=<?php echo $fila[0]; ?>" class="btn btn-danger">Eliminar</a></td>
                        </tr>

                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>