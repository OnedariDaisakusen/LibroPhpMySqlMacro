<?php
    include("ProductoDao.php");

    $dao = new ProductoDao();
?>

<table class="table mt-2">
            <thead>
                <tr>
                    <th scope="col">Id Producto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Pais</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($dao->lista() as $key) {
                ?>

                <tr>
                    <td><?php echo $key[0]; ?></td>
                    <td><?php echo $key[1]; ?></td>
                    <td><?php echo $key[2]; ?></td>
                    <td><?php echo $key[3]; ?></td>
                    <td><?php echo utf8_encode($key[4]); ?></td>
                    <td><a href="actualizar.php?idProd=<?php echo $key[0]; ?>" class="btn btn-info">Modificar</a></td>
                    <td><a href="eliminar.php?idProd=<?php echo $key[0]; ?>" class="btn btn-danger">Eliminar</a></td>

                </tr>

                <?php
                    }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total : </td>
                </tr>
            </tbody>
        </table>