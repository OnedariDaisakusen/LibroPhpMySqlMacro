<?php
    include("ProductoDao.php");
    include("Producto.php");
    $dao = new ProductoDao();

    $productoPorId;
    if(isset($_GET["idProd"])){
        $id = $_GET["idProd"];
        $productoPorId = $dao->obtener($id);
    }



    if(isset($_POST['btnActualizar'])){
        $producto = new Producto();
        
        $id = $_POST["idProducto"];
        $nombre = $_POST['nombre'];
        $serie = $_POST['serie'];
        $marca = $_POST['marca'];
        $pais = $_POST['pais'];

        $producto->setId($id);
        $producto->setNombre($nombre);
        $producto->setSerie($serie);
        $producto->setIdMarca($marca);
        $producto->setIdPais($pais);


        $result = $dao->actualizar($producto);

        if($result=1){
            echo "<h3>Registro Correcto</h3>";
            header("location: index.php");

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
        <form action="actualizar.php" method="POST">
            <h1>Actualizar Producto</h1>
            <input type="hidden" name="idProducto" value="<?php echo $productoPorId[0]?>">

            <div class="row">
                Nombre : <input type="text" name="nombre" class="form-control" value="<?php echo $productoPorId[1]?>">
            </div>
            <div class="row">
                Serie : <input type="text" name="serie" class="form-control" value="<?php echo $productoPorId[2]?>">
            </div>
            <div class="row">
                Marca : <input type="text" name="marca" class="form-control" value="<?php echo $productoPorId[3]?>">
            </div>
            <div class="row">
                Pais : <input type="text" name="pais" class="form-control" value="<?php echo $productoPorId[4]?>">
            </div>

            <br>
            <input type="submit" value="Registrar" name="btnActualizar" class="btn btn-primary">

        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>