
<?php
include("../conexion/conexion.php");
$conexion=conectar($servername,$database,$username,$pasword);



    
    
    








        function insertar_noticia($titulo,$autor,$contenido,$conexion){
            
            
           
$sql = "INSERT INTO noticias(titulo,autor,contenido)VALUES('$titulo','$autor','$contenido')" ;

$resultado=mysqli_query($conexion,$sql);
            mysqli_close($conexion);
 if ( $resultado ) {
     
     
     echo  "<br>Insercion exitosa";
     
} else {
     
     
     echo "<br>no se guardo" ;
 }
            
            
        }
            
//funcion de eliminar noticia        
        function eliminar_noticia($titulo,$conexion){
                
             
               $sql = "DELETE FROM noticias WHERE titulo ='$titulo'"; 
               $resultado=mysqli_query($conexion,$sql);
            mysqli_close($conexion);
            
          if ( $resultado ) {
     
     
         echo  "<br>noticia eliminada";
             
         } else {
     
     
              echo "<br>no se elimino" ;
              
         }
            
            
        }



        function modificar_noticia($id,$conexion){
       
            
            
            
            
            
        }



    function insertar_usuario($nombre,$contrasena,$email,$edad,$fecha,$direccion,$cp,$provincia,$genero,$conexion){
           
                $sql ="INSERT INTO usuarios(nombre,contraseña,email,edad,fecha_nacimiento,direccion,codigo_postal,provincia,genero)VALUES('$nombre','$contrasena','$email','$edad','$fecha','$direccion','$cp','$provincia','$genero')";

 
                $resultado=mysqli_query($conexion,$sql);
                mysqli_close($conexion);
                if ( $resultado ) {
     
                echo  "<br>Insercion exitosa";
              
     
                } else {
     
               echo "<br>no se guardo" ;
                 
                    
                    
               }
            
               }
            
            
    function eliminar_usuario($id,$conexion){
        
               $sql = "DELETE FROM usuarios WHERE id ='$id'"; 
              
               $resultado=mysqli_query($conexion,$sql);
               mysqli_close($conexion);
            
               if ( $resultado ) {
     
                       echo  "<br>Usuario eliminado";
             
              
              } else {
     
                       echo "<br>no se elimino este" ;
             
              }
            
            
              }



?>