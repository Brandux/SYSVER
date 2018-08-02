<?php
    class proyectos{
        public function agregaProyectos($datos){
            $c= new conectar();
            $conexion=$c->conexion (); $c= new conectar();
            $conexion=$c->conexion ();
            $sql="call pro_RegistrarProyecto('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', $datos[4], $datos[5], $datos[6]);";
            return mysqli_query($conexion, $sql );
        }


        public function editProyectos($datos){
            $c= new conectar();
            $conexion=$c->conexion (); $c= new conectar();
            $sql="call vernie_db.pro_EditProyecto(1, 2, 'lala', '2018-08-01', '1', '1', 200)";
            return mysqli_query($conexion, $sql);
        }
    
        public function eliminarProyectos($idCliente){
            $c= new conectar();
            $conexion=$c->conexion (); $c= new conectar();
            $sql="";
            return mysqli_query($conexion, $sql);
        }
    }

?>