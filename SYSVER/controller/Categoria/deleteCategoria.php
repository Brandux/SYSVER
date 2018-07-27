<?php
    session_start();
    require_once "../../controller/Conexion.php";
    require_once "../../clases/categoria.php";
    $id = $_POST['idCate'];
    $obj=new cateogrias();
    echo $obj-> eliminarCategoria($id);
?>