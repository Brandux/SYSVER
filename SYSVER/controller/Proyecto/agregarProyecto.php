<?php
    session_start();
    require_once "../../controller/Conexion.php";
    require_once "../../clases/Proyectos.php";

    $datos = array(
    $_POST['proyecto'],
    $_POST['Es_suelo'],
    $_POST['fecha_ini'],
    $_POST['fecha_fin'],
    $_POST['idCliente'],
    $_POST['idCategoria'],
    $_POST['sueldo']);

    $obj = new proyectos();
    echo $obj-> agregaProyectos($datos);
?>