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
        $sql="INSERT INTO worker (idFilial, Nombre, DNI, email, cell, Tipo_Worker, Fecha_Inicio, Fechas_Fin, Salario, Edad, Estado, Horario, 
              Dias_Laborales, Horas) 
              VALUES ('$datos[0]','$datos[1]','$datos[2]', '$datos[3]','$datos[4]','$datos[5]', '$datos[6]','$datos[7]','$datos[8]', 
                        '$datos[9]','1','$datos[10]', '$datos[11]','$datos[12]')";
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