<?php
    session_start();
    require_once "../../controller/Conexion.php";
    require_once "../../clases/cliente.php";

    $datos = array(
    $_POST['nombre'],
    $_POST['num_doc'],
    $_POST['tipo_doc'],
    $_POST['celular'],
    $_POST['telefono'],
    $_POST['email']);

    $obj = new clientes();
    echo $obj-> agregaCliente($datos);


    
?>