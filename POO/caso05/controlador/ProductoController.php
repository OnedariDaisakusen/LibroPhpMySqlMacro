<?php
    class ProductoController{

        

        public function listar(){
            include("../dao/ProductoDao.php");
            $dao = new ProductoDao();
            return $productos =$dao->listar();
        }

        
    }
?>