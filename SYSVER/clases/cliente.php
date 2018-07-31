<?php
    class clientes{
        public function agregaCliente($datos){
            $c= new conectar();
            $conexion=$c->conexion (); $c= new conectar();
            $conexion=$c->conexion ();
            $sql="INSERT INTO cliente (Nombre, Doc_identidad, Tipo_identidad, Celular, Telefono, Estado, email)
             VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]','1' ,'$datos[5]')";
            return mysqli_query($conexion, $sql );
        }


        public function editCliente($datos){
            $c= new conectar();
            $conexion=$c->conexion (); $c= new conectar();
            $sql="";
            return mysqli_query($conexion, $sql);
        }
    
        public function eliminarCliente($idCategoria){
            $c= new conectar();
            $conexion=$c->conexion (); $c= new conectar();
            $sql="";
            return mysqli_query($conexion, $sql);
        }
    }

?>