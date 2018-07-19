<?php

    require_once "../../controller/Conexion.php";
    require_once "../../clases/Usuarios.php";
    $obj= new usuarios();
    $datos = array($_POST['username'],  $_POST['password']);
    echo $obj->loginUser($datos);

?>