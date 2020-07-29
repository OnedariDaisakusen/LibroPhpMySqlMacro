<?php

    include("Pago.php");
    
    if(isset($_POST["btnProcesar"])){
        $trabajador = $_POST["trabajador"];
        $categoria = $_POST["categoria"];
        $horas = $_POST["horas"];
        $fecha = getDate();

        $pago = new Pago($fecha,$trabajador,$categoria,$horas);        
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
        <h1>Pago de Trabajadores</h1>
        <div>
            <form action="index.php" method="POST">
                Trabajador : <input type="text" name="trabajador">
                Categoria : 
                <select name="categoria" id="">
                    <option value="Operario">Operario</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Jefe">Jefe</option>
                </select>

                Horas Trabajadas : <input type="text" name="horas">

                <input type="submit" value="Procesar" name="btnProcesar">
            </form>
        </div>

        <div>
        </div>

            Costo por Hora : <?php echo $pago->determinarCostoPorHora();?>
        <div>
            Saldo Bruto : <?php echo $pago->calcularSubTotal();?>
        </div>

        <div>
            Descuento : <?php echo $pago->calcularDescuento();?>
        </div>

        <div>
            Salario Neto : <?php echo $pago->cacularNeto();?>
        </div>
    </div>
</body>
</html>