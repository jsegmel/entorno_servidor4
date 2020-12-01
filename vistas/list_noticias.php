<!doctype html>


<?php

include("conexion/conexion.php");
$con=conectar($servername,$database,$username,$pasword);
?>

<link rel=stylesheet href="css/css.css" type="text/css" >




<table >
    <tr>
    
        <th>id</th>
        <th>titulo</th>
        <th>contenido</th>
        <th>autor</th>
        <th>hora de creacion</th>
        <th>likes</th>
   
    </tr>
        
        <?php
        
    
        $sql="SELECT * from noticias ORDER BY id DESC";
        $result=mysqli_query($con,$sql);
        while($mostar=mysqli_fetch_array($result)){
        ?>
        
        
        <tr>
    
        <td width="40px;"><?php echo $mostar[0]?></td>
        <td><?php echo $mostar['titulo']?></td>
        <td width="800px"; ><?php echo $mostar['contenido']?></td>
        <td><?php echo $mostar['autor']?></td>
        <td><?php echo $mostar['hora creacion']?></td>
        <td><?php echo $mostar['likes']?></td>
        
        </tr>
        <?php
        }
        ?>
   
        
    </table>























