<?php

    include("ProductoDao.php");
    $id = $_GET["idProd"];
    $dao = new ProductoDao();
    
    if($dao->eliminar($id)==1){
        header("location: index.php");
    }else{
        echo "Erro al eliminar";
    }
    
?>