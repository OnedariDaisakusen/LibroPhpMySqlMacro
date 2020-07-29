<?php
    class Producto{
      private $descripcion="";
      private $cantidad = 0;

      public function getDescripcion(){
          return $this->descripcion;
      }

      public function setDescripcion($descripcion){
          $this->descripcion = $descripcion;
      }

      public function getCantidad(){
          return $this->cantidad;
      }

      public function setCantidad($cantidad){
          $this->cantidad = $cantidad;
      }

      public function determinarPrecio(){
          if($this->descripcion=="Computadora"){
              return 1500;
          }else if($this->descripcion=="Laptop"){
              return 1000;
          }else{
              return 500;
          }
      }

      public function subtotal(){
          return $this->determinarPrecio()*$this->cantidad;
      }

      public function descuento(){
          return $this->subtotal()*0.1;
      }

      public function neto(){
          return $this->subtotal() - $this->descuento();
      }
    }
?>