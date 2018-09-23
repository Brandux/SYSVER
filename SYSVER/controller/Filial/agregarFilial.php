<?php
    session_start();
    require_once "../../controller/Conexion.php";
    require_once "../../clases/Filial.php";
    $datos = array($_POST['Filial'], $_POST['celular'],
    $_POST['ruc']);

    $obj = new Filial();
    echo $obj-> createFilial($datos);
?>