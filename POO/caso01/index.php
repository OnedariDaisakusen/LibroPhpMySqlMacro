
<?php
    include("Producto.php");

    $producto = new Producto();

    if(isset($_POST['producto'])){
        $producto->setDescripcion($_POST["producto"]);
        if($_POST['cantidad']){
            $producto->setCantidad($_POST['cantidad']);

        }

    }

    

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Venta de Productos</h1>

        <form action="index.php" method="POST">
        <div>
            Producto
            <select name="producto" id="">
                <option value="Computadora">Computadora</option>
                <option value="Laptop">Laptop</option>
                <option value="PC">PC</option>
            </select>
        </div>
        <br>
        <div>
            Cantidad
            <input type="text" name="cantidad" value="<?php echo $producto->getCantidad()?>">
        </div>
        <br>
        <input type="submit" value="Procesar">
        </form>
<br>
    

        <div>
            Subtotal : <input type="text" value="<?php echo $producto->subtotal();?>">
            Descuento : <input type="text" value="<?php echo $producto->descuento();?>">
            Neto : <input type="text" value="<?php echo $producto->neto();?>">
        </div>
    </div>
</body>
</html>