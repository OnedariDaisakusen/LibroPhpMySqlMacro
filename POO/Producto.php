<?php
    class Producto{
      private $descripcion="";
      private $cantidad = 0;

      public function getDescripcion(){
          return $this->$descripcion;
      }

      public function setDescripcion($descripcion){
          $this->$descripcion = $descripcion;
      }

      public function getCantidad(){
          return $this->$cantidad;
      }

      public function setCantidad($cantidad){
          $this->$cantidad = $cantidad;
      }

      public function determinarPrecio(){
          if($descripcion=="Computadora"){
              return 1500;
          }else if($descripcion=="Laptop"){
              return 1000;
          }else{
              return 500;
          }
      }

      public function subtotal(){
          return determinarPrecio()*$cantidad;
      }

      public function descuento(){
          return subtotal()*0.1;
      }

      public function neto(){
          return subtotal() - descuento();
      }
    }
?>