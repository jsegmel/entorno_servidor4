<!doctype html>
<?php
 $servername="localhost";
 $database="M07";
 $username="ilerna";
 $pasword="123456";
 
 function conectar($servername,$database,$username,$pasword){
 
 

 $conexion=mysqli_connect($servername,$username,$pasword,$database) ;
 
     
     if(!$conexion){
         
         
         echo "no conectado";
         
         
         
     }else{
         
        
       return $conexion;
         
         
     }

 }

 
?>
