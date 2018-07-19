<?php
   
   class conectar{
       private $servidor="localhost";
       private $usuario="vertec";
       private $pass="vernie123";
       private $db="vernie_db";

       public function conexion (){
         $con = mysqli_connect($this->servidor,$this->usuario,$this->pass, $this->db);
         return $con;
       }
   }
  
   $obj = new conectar();
    if($obj -> conexion()){
        echo 'Se conecto correctamente ';
    }else{
        echo 'No se conecto correctamente';
    }
?>