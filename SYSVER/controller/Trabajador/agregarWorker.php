<?php
    session_start();
    require_once "../../controller/Conexion.php";
    require_once "../../clases/Trabajador.php";

    $datos = array(
    $_POST['nombre'],
    $_POST['dni'],
    $_POST['correo'],
    $_POST['celular'],
    $_POST['tipo_work'],
    $_POST['fecha_ini'],
    $_POST['fecha_fin'],
    $_POST['sueldo'],
    $_POST['edad'],
    $_POST['filial'],
    $_POST['tipo_doc'],
    $_POST['horario']);

    $obj = new Trabajador();
    echo $obj-> createTrabajador($datos);
?>