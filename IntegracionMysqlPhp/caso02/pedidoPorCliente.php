<?php
    include('conexion.php');
    include('captura.php');
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
        <form action="pedidoPorCliente.php" method="POST">
            <label for="">Cliente</label>
            <input type="text" class="form-control" name="idCliente" value="<?php echo getCliente(); ?>">
            <input type="submit" class="btn btn-primary m-1" value="Ingresar">
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id Pedido</th>
                    td
                </tr>
            </thead>
            <tbody>
                
                <?php

                    if($id = getCliente()){
                        $sql = "select o.id,e.first_name, c.first_name, o.order_date, o.ship_address, o.ship_city,round((od.quantity * od.unit_price),2) from orders o join employees e on e.id = o.employee_id join customers c on c.id = o.customer_id join order_details od ON od.order_id = o.id where c.id = '$id'";
                        $result = mysqli_query($con,$sql);
                    }else{
                        $sql = "select o.id,e.first_name, c.first_name, o.order_date, o.ship_address, o.ship_city, round((od.quantity * od.unit_price),2)  from orders o join employees e on e.id = o.employee_id join customers c on c.id = o.customer_id join order_details od ON od.order_id = o.id";
                        $result = mysqli_query($con,$sql);
                    }
                

                    $total = 0;
                    while ($fila = mysqli_fetch_row($result)) {
                        
                        $total+=$fila[6];
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
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $total; ?></td>
                </tr>
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