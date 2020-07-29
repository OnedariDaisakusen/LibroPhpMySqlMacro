<?php
    function getIdProducto(){
        if(isset($_POST['idProducto'])){
            
            return $_POST['idProducto'];
        }
    }
?>