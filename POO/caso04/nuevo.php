<?php
    include("ProductoDao.php");
    include("Producto.php");
    $dao = new ProductoDao();


    if(isset($_POST['btnRegistrar'])){
        $producto = new Producto();
        

        $nombre = $_POST['nombre'];
        $serie = $_POST['serie'];
        $marca = $_POST['marca'];
        $pais = $_POST['pais'];

        $producto->setNombre($nombre);
        $producto->setSerie($serie);
        $producto->setIdMarca($marca);
        $producto->setIdPais($pais);


        $result = $dao->registrar($producto);

        if($result=1){
            echo "<h3>Registro Correcto</h3>";
        }else{
            echo "<h3>Error de Registro</h3>";
        }
    }
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
        <form action="nuevo.php" method="POST">
            <h1>Nuevo Producto</h1>
            <input type="hidden" name="idProducto">

            <div class="row">
                Nombre : <input type="text" name="nombre" class="form-control">
            </div>
            <div class="row">
                Serie : <input type="text" name="serie" class="form-control">
            </div>
            <div class="row">
                Marca : <input type="text" name="marca" class="form-control">
            </div>
            <div class="row">
                Pais : <input type="text" name="pais" class="form-control">
            </div>

            <br>
            <input type="submit" value="Registrar" name="btnRegistrar" class="btn btn-primary">

        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>