<?php
    include('conexion.php');
    include("captura.php");
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
        <h1>Listado Pedidos por cliente</h1>
        <form action="consultaProducto.php" method="POST">
            <label for="">Codigo de Producto</label>
            <input type="text" class="form-control" name="idProducto" value="<?php echo getIdProducto();?>">
            <input type="submit" class="btn btn-primary m-1" value="Ingresar">
        </form>

        <?php
            $codigo = getIdProducto();
            $sql = "select * from products where id = '$codigo'";
            $resultado = mysqli_query($con,$sql);
            $producto = mysqli_fetch_array($resultado);
        ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <td><?php echo $producto[1];?></td>
                </tr>
                <tr>
                    <th scope="col">Codigo</th>
                    <td><?php echo $producto[2];?></td>
                </tr>
                <tr>
                    <th scope="col">Name</th>
                    <td><?php echo $producto[3];?></td>
                </tr>
            </thead>
        </table>

        


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>