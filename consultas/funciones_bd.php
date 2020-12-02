
<?php
include("../conexion/conexion.php");
$conexion=conectar($servername,$database,$username,$pasword);


        function insertar_noticia($titulo,$autor,$contenido,$conexion){
            
            
           
$sql = "INSERT INTO noticias(titulo,autor,contenido)VALUES('$titulo','$autor','$contenido')" ;

$resultado=mysqli_query($conexion,$sql);
            mysqli_close($conexion);
 if ( $resultado ) {
     
     
     echo  "<br>Insercion exitosa";
      redirigir();
     
     
} else {
     
     
     echo "<br>no se guardo" ;
      redirigir();
 }
            
            
        }
            
//funcion de eliminar noticia        
        function eliminar_noticia($id,$conexion){
                
             
               $sql = "DELETE FROM noticias WHERE id ='$id'"; 
               $resultado=mysqli_query($conexion,$sql);
            mysqli_close($conexion);
            
          if ( $resultado ) {
     
     
         echo  "<br>noticia eliminada";
             redirigir();
         } else {
     
     
              echo "<br>no se elimino" ;
               redirigir();
         }
            
            
        }



        function modificar_noticia($titulo,$contenido,$autor,$id,$conexion){
       
            $sql ="UPDATE noticias SET titulo='$titulo',contenido='$contenido',autor='$autor' WHERE id='$id'";
            
               $resultado=mysqli_query($conexion,$sql);
            mysqli_close($conexion);
            
          if ( $resultado ) {
     
     
         echo  "<br>noticia actualizada";
             redirigir();
         } else {
     
     
              echo "<br>no se actualizo" ;
               redirigir();
         }
            
            
            
        }



    function insertar_usuario($nombre,$contrasena,$email,$edad,$fecha,$direccion,$cp,$provincia,$genero,$conexion){
           
                $sql ="INSERT INTO usuarios(nombre,contraseña,email,edad,fecha_nacimiento,direccion,codigo_postal,provincia,genero)VALUES('$nombre','$contrasena','$email','$edad','$fecha','$direccion','$cp','$provincia','$genero')";

 
                $resultado=mysqli_query($conexion,$sql);
                mysqli_close($conexion);
                if ( $resultado ) {
     
                echo  "<br>Insercion exitosa";
              redirigir();
     
                } else {
     
               echo "<br>no se guardo" ;
                 
                    redirigir();
                    
               }
            
               }
            
            
    function eliminar_usuario($id,$conexion){
        
               $sql = "DELETE FROM usuarios WHERE id ='$id'"; 
              
               $resultado=mysqli_query($conexion,$sql);
               mysqli_close($conexion);
            
               if ( $resultado ) {
     
                       echo  "<br>Usuario eliminado";
                          redirigir();
              
              } else {
     
                       echo "<br>no se elimino este" ;
                       redirigir();
              }
            
            
              }
  function redirigir(){
      ?><br>
        <a href="../index.php">Volver</a>
        <?php 
      
  }


?>