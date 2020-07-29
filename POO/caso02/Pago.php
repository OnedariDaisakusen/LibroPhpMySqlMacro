<?php
    class Pago{
        private $fecha="";
        private $trabajador="";
        private $categoria="";
        private $horas=0;

        //constructor
        public function __construct($fecha,$trabajador,$categoria,$horas){
            $this->fecha=$fecha;
            $this->trabajador=$trabajador;
            $this->categoria=$categoria;
            $this->horas=$horas;
        }

        //metodos get
        public function getFecha(){
            return $this->fecha;
        }
        public function getTrabajador(){
            return $this->trabajador;
        }
        public function getCategoria(){
            return $this->categoria;
        }
        public function getHoras(){
            return $this->horas;
        }

        //metodos set
        public function setFecha($fecha){
            $this->fecha = $fecha;
        }
        public function setTrabajador($trabajador){
            $this->trabajador=$trabajador;
        }
        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }
        public function setHoras($horas){
            $this->horas = $horas;
        }

        //metodos propios
        public function determinarCostoPorHora(){
            if($this->categoria=="Operario"){
                return 10;
            }else if($this->categoria=="Administrativo"){
                return 20;
            }else if($this->categoria == "Jefe"){
                return 40;
            }else{
                return 0;
            }
        }

        public function calcularSubTotal(){
            return $this->determinarCostoPorHora()*$this->horas;
        }

        public function calcularDescuento(){
            if($this->calcularSubTotal()<1000){
                return 0.075*$this->calcularSubTotal();
            }else if($this->calcularSubTotal()<=2000){
                return 0.14*$this->calcularSubTotal();
            }else if($this->calcularSubTotal()){
                return 0.20*$this->calcularSubTotal();
            }else{
                return 0;
            }
        }

        public function cacularNeto(){
            return $this->calcularSubTotal() - $this->calcularDescuento()   ;
        }
    }
?>