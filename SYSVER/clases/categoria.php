<?php
    class cateogrias{
        public function agregaCategoria($datos){
            $c= new conectar();
            $conexion=$c->conexion (); $c= new conectar();
            $conexion=$c->conexion ();
            $sql="INSERT INTO categoria (Nombre, Estado) VALUES ('$datos[0]' , '1')";
            return mysqli_query($conexion, $sql );
        }


        public function editCategorias($datos){
            $c= new conectar();
            $conexion=$c->conexion (); $c= new conectar();
            $sql="UPDATE categoria SET Nombre='$datos[1]', Estado='$datos[2]' WHERE idCategoria='$datos[0]'";
            return mysqli_query($conexion, $sql);
        }
    
        public function eliminarCategoria($idCategoria){
            $c= new conectar();
            $conexion=$c->conexion (); $c= new conectar();
            $sql="DELETE FROM categoria WHERE idCategoria='$idCategoria'";
            return mysqli_query($conexion, $sql);
        }
    }

?>