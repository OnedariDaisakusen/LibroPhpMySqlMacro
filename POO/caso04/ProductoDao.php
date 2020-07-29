<?php

    class ProductoDao{

        public function lista(){
            include("Conexion.php");
            $conexion = new Conexion();
            
            $sql = "select p.idproducto, p.nombre, p.serie, m.nombre, pa.nombre from producto p join marca m on p.idmarca = m.idmarca join pais pa on pa.idpais = p.idpais";
            $result = mysqli_query($conexion->getConexion(),$sql);
            while ($producto = mysqli_fetch_array($result)) {
                $productos[] = $producto;
            }

            return $productos;
        }

        public function registrar(Producto $producto){
            $nombre =  $producto->getNombre();
            $serie = $producto->getSerie();
            $marca = $producto->getIdMarca();
            $pais = $producto->getIdPais();
            include("Conexion.php");
            $conexion = new Conexion();

            $sql = "insert into producto(nombre,serie,idmarca,idpais) values('$nombre','$serie','$marca','$pais')";
            $result = mysqli_query($conexion->getConexion(),$sql);

            if($result){
                return 1;
            }else{
                return 0;
            }
        }
    }

?>