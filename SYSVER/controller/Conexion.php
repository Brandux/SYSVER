<?php
   
   class conectar{
       private $servidor="173.236.82.180";
       private $usuario="verniearchitect_vertec";
       private $pass="pass//2018";
       private $db="verniearchitect_db";

       public function conexion (){
         $con = mysqli_connect($this->servidor,$this->usuario,$this->pass, $this->db);
         return $con;
       }
   }
?>