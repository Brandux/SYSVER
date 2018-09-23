<?php
    session_start();
    require_once "../../controller/Conexion.php";
    require_once "../../clases/categoria.php";
    $categoria = $_POST['categoria'];
    $datos = array($categoria);

    $obj = new cateogrias();
    echo $obj-> agregaCategoria($datos);
?>