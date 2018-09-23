<?php
    session_start();
    require_once "../../controller/Conexion.php";
    require_once "../../clases/Filial.php";
    $datos=array( $_POST['idfili'],
                    $_POST['filial_edit'],
                    $_POST['celular_edit'],
                    $_POST['ruc_edit']);
   

    $obj = new Filial(); 
    echo $obj->editFilial($datos); 
?>