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
?>