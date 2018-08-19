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
            $sql="UPDATE cliente SET Doc_identidad='$datos[1]', Celular='$datos[2]', Telefono='$datos[4]', email='$datos[3]' WHERE idCliente='$datos[0]' ";
            return mysqli_query($conexion, $sql);
        }
    
        public function eliminarCliente($idCliente){
            $c= new conectar();
            $conexion=$c->conexion (); $c= new conectar();
            $sql="UPDATE cliente SET Estado='0' WHERE idCliente='$idCliente'";
            return mysqli_query($conexion, $sql);
        }
    }

?>