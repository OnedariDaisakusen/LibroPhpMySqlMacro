<?php
    class Conexion{
        
        private $con = null;
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $bd = "sistema_delivery";

        public function __construct()
        {
            $this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->bd);
        }

        public function getConexion(){
            return $this->con;
        }
    }
?>