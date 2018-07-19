<?php

    class usuarios{
        
        public function loginUser($datos){
            $c = new conectar();
            $conexion = $c->conexion();
            $pass=sha1($datos[1]);
            $sql ="SELECT * FROM vernie_db.usuario where User = '$datos[0]' and Pass ='$pass'";
            $result = mysqli_query ($conexion, $sql);
            if(mysqli_num_rows($result)>0){
                return 1;
            }else{
                return 0;
            }
        }
    
    }

?>