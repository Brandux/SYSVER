<?php
    session_start();
    require_once "../../controller/Conexion.php";
    require_once "../../clases/Proyectos.php";

    $datos = array(
    $_POST['idContr'],
    $_POST['idPro'],
    $_POST['nom_edit_proyex'],
    $_POST['edit_finpro'],
    $_POST['edit_Costo'],
    $_POST['edit_Es_suelo'],
    $_POST['edit_estado']);

    $obj = new proyectos();
    echo $obj-> editProyectos($datos);
?>