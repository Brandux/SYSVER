<?php
    session_start();
    require_once "../../controller/Conexion.php";
    require_once "../../clases/cliente.php";   

    $id = $_POST['idcliente'];
    $obj=new clientes();
    echo $obj-> eliminarCliente($id);
?>