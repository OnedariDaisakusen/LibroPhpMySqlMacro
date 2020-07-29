<?php
    class Producto{
        private $id = null;
        private $nombre = "";
        private $serie = "";
        private $idMarca = null;
        private $nombreMarca = "";
        private $idPais = null;
        private $nombrePais = "";

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            return $this->nombre = $nombre;
        }
        public function getSerie(){
            return $this->serie;
        }
        public function setSerie($serie){
            $this->serie = $serie;
        }
        public function getIdMarca(){
            return $this->idMarca;
        }
        public function setIdMarca($idMarca){
            $this->idMarca = $idMarca;
        }
        public function getNombreMarca(){
            return $this->nombreMarca;
        }
        public function setNombreMarca($nombreMarca){
            $this->nombreMarca = $nombreMarca;
        }
        public function getIdPais(){
            return $this->idPais;
        }
        public function setIdPais($idPais){
            $this->idPais = $idPais;
        }
        public function getNombrePais(){
            return $this->nombrePais;
        }
        public function setNombrePais($nombrePais){
            $this->nombrePais = $nombrePais;
        }
        
    }
?>