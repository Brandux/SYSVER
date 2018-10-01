<?php

    class usuarios{
        
        public function loginUser($datos){
            $c = new conectar();
            $con = $c-> conexion();
            $pass=md5($datos[1]);

            $_SESSION['usuario']=$datos[0];
			$_SESSION['iduser']=self::traeID($datos);

            $sql ="SELECT * FROM usuario where User = '$datos[0]' and Pass ='$pass' and Estado = 1;";
            $result = mysqli_query($con, $sql);           
            if(mysqli_num_rows($result) !=null){
                return 1;
            }else{
                return 0;
            }
        }

        public function traeID($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			$password=sha1($datos[1]);
			$sql="SELECT idUsuario 
					FROM usuario 
                    where User = '$datos[0]' 
                    and Pass ='$datos[1]'"; 
			$result=mysqli_query($conexion,$sql);
			return mysqli_fetch_row($result)[0];
		}
    
    }

?>