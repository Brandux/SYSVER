<?php
/**
 * Created by PhpStorm.
 * User: jorda
 * Date: 03/08/2018
 * Time: 10:16 AM
 */

class Trabajador{

    public function createTrabajador($datos){
        $c = new conectar();
        $con = $c-> conexion();
        $sql="CALL PRO_REG_TRABAJADOR('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', $datos[4], '$datos[5]', '$datos[6]', $datos[7], $datos[8] , $datos[9], $datos[10], '$datos[11]');";
        return mysqli_query($con, $sql);
    }

    public function getAll(){
        $c = new conectar();
        $con = $c-> conexion();
        $sql="SELECT Nombre,DNI,email,Edad,cell,Fechas_Fin,Salario,Estado from worker";
        $result=mysqli_query($con,$sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

}


?>