<?php
    session_start();
    require_once "../../controller/Conexion.php";
    require_once "../../clases/Filial.php";
    $id = $_POST['idfilial'];
    $obj=new Filial();
    echo $obj-> eliminarFilial($id);
?>