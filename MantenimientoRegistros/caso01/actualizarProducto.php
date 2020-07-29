<?php
    include('conexion.php');
?>

<?php 
    $idProducto = $_GET["id"];
    $sqlProducto = "select * from producto where idproducto = '$idProducto'";
    $resultProducto = mysqli_query($con,$sqlProducto);
    $producto = mysqli_fetch_array($resultProducto);
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
        <form action="update.php" method="POST">
            <input type="hidden" name = "idProducto" value="<?php echo $producto[0]; ?>">
            <div class="row">
                <div class="col-6">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $producto[1]; ?>">
                </div>
                <div class="col-6">
                    <label for="">Serie</label>
                    <input type="text" class="form-control" name="serie" value="<?php echo $producto[2]; ?>">
                </div>
            </div>
            
            <div class="row">
                <div class="col-6">
                    <label for="">Pais</label>
                    <select name="pais" id="" class="form-control" value="<?php echo $producto[4]; ?>">
                        <?php
                            $sqlPais = "select * from pais";
                            $resultPais = mysqli_query($con,$sqlPais);

                            while ($fila = mysqli_fetch_row($resultPais)) {
                                if($fila[0]==$producto[4]){
                                    ?>
                                            <option selected="selected" value="<?php echo $fila[0]; ?>"><?php echo $fila[2];?></option>
            
                                    <?php
                                            }
            
                                            else{
                                    ?>
                                            <option value="<?php echo $fila[0]; ?>"><?php echo $fila[2];?></option>
            
                                    <?php
                                            }
                                        }
                                    ?>
                    </select> 
                </div>

                <div class="col-6">
                    <label for="">Marca</label>
                    <select name="marca" id="" class="form-control">
                        <?php
                            $sqlMarca = "select * from marca";
                            $resultMarca = mysqli_query($con,$sqlMarca);

                            while ($fila = mysqli_fetch_row($resultMarca)) {
                                if($fila[0]==$producto[3]){
                        ?>
                                <option selected="selected" value="<?php echo $fila[0]; ?>"><?php echo $fila[1];?></option>

                        <?php
                                }

                                else{
                        ?>
                                <option value="<?php echo $fila[0]; ?>"><?php echo $fila[1];?></option>

                        <?php
                                }
                            }
                        ?>
                    </select> 
                </div>
            </div>
            
            <input type="submit" value="Registrar" class="btn btn-primary mt-3"/>

        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>