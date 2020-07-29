<?php

    function getCliente(){
        if(isset($_POST['idCliente'])){
            
            return $_POST['idCliente'];
        }
    }
?>