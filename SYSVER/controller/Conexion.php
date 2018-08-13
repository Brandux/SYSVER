<?php
   
   class conectar{
       private $servidor="localhost";
       private $usuario="root";
       private $pass="";
       private $db="verniearchitect_db";

       public function conexion (){
         $con = mysqli_connect($this->servidor,$this->usuario,$this->pass, $this->db);
         return $con;
       }
   }
?>