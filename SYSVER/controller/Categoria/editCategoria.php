<?php
    session_start();
    require_once "../../controller/Conexion.php";
    require_once "../../clases/categoria.php";
    $datos=array(   $_POST['idcate'],
                    $_POST['categoria'],
                    $_POST['estado']);
   

    $obj = new cateogrias(); 
    echo $obj->editCategorias($datos); 
?>