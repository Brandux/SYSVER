<?php
    session_start();
    require_once "../../controller/Conexion.php";
    require_once "../../clases/Usuarios.php";
    $obje  = new usuarios();
    $datos = array($_POST['username'],  $_POST['password']);
    echo $obje -> loginUser($datos);

?>