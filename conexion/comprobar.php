<!doctype html>
<?php

include("../consultas/funciones_bd.php");

          if(isset($_POST['id'])){
              
              $id=$_POST['id'];
          }

          if(isset($_POST['titulo'])){
              
              $titulo=$_POST['titulo'];
              
          }
          if(isset($_POST['autor'])){
              
              $autor=$_POST['autor'];
        
          }

            if(isset($_POST['textarea'])){
            
            $contenido=$_POST['textarea'];
            }

    if(isset($_POST['enviar'])){
        
        insertar_noticia($titulo,$autor,$contenido,$conexion);
        
         }


   if(isset($_POST['eliminar'])){

       eliminar_noticia($id,$conexion);

   }


    if(isset($_POST['modificar'])){
      
      modificar_noticia($id,$titulo,$autor,$textarea,$conexion);
       
   }













   if(isset($_POST['id'])){
              
              $id=$_POST['id']; 
          }

    if(isset($_POST['nombre'])){
    
        $nombre=$_POST['nombre'];  
    }

    if(isset($_POST['contraseña'])){
        
        $contrasena=$_POST['contraseña'];
    }

    if(isset($_POST['email'])){
    
      $email=$_POST['email'];  
    }

    if(isset($_POST['edad'])){
    
       $edad=$_POST['edad']; 
    }

    
    if(isset($_POST['fechan'])){
    
        $fecha=$_POST['fechan'];
    }
    
    if(isset($_POST['direccion'])){
    
      $direccion=$_POST['direccion'];  
    } 
    if(isset($_POST['cp'])){
    
      $cp=$_POST['cp'];
    }
    if(isset($_POST['provincia'])){
    
       $provincia=$_POST['provincia'] ; 
    }
    if(isset($_POST['genero'])){
    
        $genero=$_POST['genero'] ;
    }




   if(isset($_POST['enviaru'])){
        
        insertar_usuario($nombre,$contrasena,$email,$edad,$fecha,$direccion,$cp,$provincia,$genero,$conexion);
        
         }


   if(isset($_POST['eliminaru'])){
       echo "$id";
       eliminar_usuario($id,$conexion);

   }


    if(isset($_POST['modificaru'])){
      
     modificar_usuario($conexion);
       
   }














?>