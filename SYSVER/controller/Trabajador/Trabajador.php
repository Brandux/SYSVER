<?php
/**
 * Created by PhpStorm.
 * User: jorda
 * Date: 03/08/2018
 * Time: 10:03 AM
 */

session_start();
require_once "../../controller/Conexion.php";
require_once "../../clases/Trabajador.php";
require_once "../../clases/Usuarios.php";

$trab=new Trabajador();
$opc=empty($_REQUEST['opc']) ? "vacia" : $_REQUEST['opc'];

switch($opc){
    case 'vacia':
        break;
    case 'create':
        regTrabajador();
        break;
    case 'getAll':
        getTrabajadores();
        break;
}

function regTrabajador(){
    global $trab;
    $idfilial=empty($_REQUEST['idfilial']) ? "No Registrado" : $_REQUEST['idfilial'];
    $nombre=empty($_REQUEST['nombre']) ? "No Registrado" : $_REQUEST['nombre'];
    $dni=empty($_REQUEST['dni']) ? "No Registrado" : $_REQUEST['dni'];
    $email=empty($_REQUEST['email']) ? "No Registrado" : $_REQUEST['email'];
    $cel=empty($_REQUEST['cel']) ? "No Registrado" : $_REQUEST['cel'];
    $tipoWorker=empty($_REQUEST['tipoWorker']) ? "No Registrado" : $_REQUEST['tipoWorker'];
    $fechaIni=empty($_REQUEST['fechaIni']) ? "No Registrado" : $_REQUEST['fechaIni'];
    $fechaFin=empty($_REQUEST['fechaFin']) ? "No Registrado" : $_REQUEST['fechaFin'];
    $salario=empty($_REQUEST['salario']) ? "No Registrado" : $_REQUEST['salario'];
    $edad=empty($_REQUEST['edad']) ? "No Registrado" : $_REQUEST['edad'];
    $horario=empty($_REQUEST['horario']) ? "No Registrado" : $_REQUEST['horario'];
    $diasLab=empty($_REQUEST['diasLab']) ? "No Registrado" : $_REQUEST['diasLab'];
    $horas=empty($_REQUEST['horas']) ? "No Registrado" : $_REQUEST['horas'];
    createUser([$nombre,$dni,$dni]);
    $data=utf8ize($trab->createTrabajador([$idfilial,$nombre,$dni,$email,$cel,$tipoWorker,$fechaIni,$fechaFin,$salario,$edad,$horario,$diasLab,$horas]));
    header('Content-Type: application/json');
    echo json_encode($data);
}

function getTrabajadores(){
    global $trab;
    $data=utf8ize($trab->getAll());
    header('Content-Type: application/json');
    echo json_encode($data);
}

function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    } return $d;
}
?>