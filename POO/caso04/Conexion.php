<?php
    class Conexion{
        private $con = null;

        public function __construct(){
            $this->con = mysqli_connect('localhost','root','','sistema_delivery');
        }

        public function getConexion(){
            return $this->con;
        }
    }
?>