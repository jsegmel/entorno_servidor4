<!doctype html>
<?php

include("conexion/conexion.php");

$con=conectar($servername,$database,$username,$pasword);
?>



<table >
    
           <tr> 
              <th>id</th>
               <th>nombre</th>
              <th>contraseña</th>
               <th>email</th>
               <th>edad</th>
               <th>fecha</th>
               <th>direccion</th>
               <th>codigo postal</th>
               <th>provincia</th>
               <th>genero</th>
           </tr>
        <form action="vistas/form_usuario.php" method="post">
               <input name="accion" type="hidden" value="crear" >  
               <input type="submit" value="crear"></input>
        </form>
        <?php
        
        $sql="SELECT * from usuarios";
        $result=mysqli_query($con,$sql);
    
        
        while($mostar=mysqli_fetch_array($result)){
        
        ?>
        <tr>
    
        <td><?php echo $mostar['id']?></td>
        <td><?php echo $mostar['nombre']?></td>
        <td><?php echo $mostar['contraseña']?></td>
        <td><?php echo $mostar['email']?></td>
        <td><?php echo $mostar['edad']?></td>
        <td><?php echo $mostar['fecha_nacimiento']?></td>
        <td><?php echo $mostar['direccion']?></td>
        <td><?php echo $mostar['codigo_postal']?></td>
        <td><?php echo $mostar['provincia']?></td>
        <td><?php echo $mostar['genero']?></td>
        <td>  
            <form action="vistas/form_usuario.php" method="post">
               <input name="id" type="hidden" value=<?php echo $mostar['id']?>>
               <input name="accion" type="hidden" value="modificar" >  
                <input type="submit" value="modificar"></input>
            </form>
            
        </td>
        <td>
            <form action="vistas/form_usuario.php" method="post">
            <input name="id" type="hidden" value=<?php echo $mostar['id']?>>
            <input name="accion" type="hidden" value="eliminar">
            <input type="submit" value="eliminar"></input>
            
            </form>

        </td>

        </tr>
        <?php
        }
    
    
        ?>
    
    
    </table>