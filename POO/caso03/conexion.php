<?php
    class Conexion{
        private $con = null;

        public function __construct(){
            $this->con = mysqli_connect('localhost','root','','sistema_delivery');
        }

        //arreglo de productos
        public function getProductos(){
            $result = mysqli_query($this->con,"select p.idproducto, p.nombre, p.serie, m.nombre, pa.nombre from producto p join marca m on p.idmarca = m.idmarca join pais pa on pa.idpais = p.idpais");
            while($misproductos = mysqli_fetch_array($result)){
                $productos[] = $misproductos;
            }

            return $productos;
        }

        //total
        public function totalProductos(){
            $result = mysqli_query($this->con,"select p.idproducto, p.nombre, p.serie, m.nombre, pa.nombre from producto p join marca m on p.idmarca = m.idmarca join pais pa on pa.idpais = p.idpais");
            return mysqli_num_rows($result);
        }
    }
?>