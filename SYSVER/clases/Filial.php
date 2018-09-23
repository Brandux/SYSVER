<?php

class Filial{
    public function createFilial($datos){
        $c = new conectar();
        $con = $c-> conexion();
        $sql="INSERT INTO filial (Nombre, Cell, Ruc,  Estado) VALUES ('$datos[0]','$datos[1]','$datos[2]','1')";
        return mysqli_query($con, $sql);
    }

    public function editFilial($datos){
        $c= new conectar();
        $conexion=$c->conexion (); $c= new conectar();
        $sql="UPDATE filial SET Nombre='$datos[1]', Cell='$datos[2]' , Ruc='$datos[3]' WHERE idFilial='$datos[0]'";
        return mysqli_query($conexion, $sql);
    }

    public function eliminarFilial($idFilial){
        $c= new conectar();
        $conexion=$c->conexion (); $c= new conectar();
        $sql="DELETE FROM filial WHERE idFilial = $idFilial";
        return mysqli_query($conexion, $sql);
    }

}