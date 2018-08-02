<?php
    session_start();
    require_once "../../controller/Conexion.php";
    require_once "../../clases/cliente.php";

    $datos = array(
    $_POST['idCliente'],
    $_POST['Num_Doc'],
    $_POST['celu'],
    $_POST['gmail'],
    $_POST['fono']);

    $obj = new clientes();
    echo $obj-> editCliente($datos);


    
?>