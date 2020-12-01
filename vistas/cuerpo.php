

<!doctype html>
<?php

include("conexion/conexion.php");
$con=conectar($servername,$database,$username,$pasword);
?>


<html>
<head>
<meta charset="utf-8">
<title>cuerpo</title>
<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>

<body>
    <br>
    <table>
    <tr>
    
        <th>id</th>
        <th>titulo</th>
        <th>contenido</th>
        <th>autor</th>
        <th>hora creacion</th>
        <th>likes</th>
   
    </tr>
        
        <?php
        
        $sql="SELECT * from noticias ORDER BY id DESC LIMIT 5 ";
        $result=mysqli_query($con,$sql);
        while($mostar=mysqli_fetch_array($result)){
        ?>
        
        
        <tr>
    
        <td><?php echo $mostar[0]?></td>
        <td><?php echo $mostar['titulo']?></td>
        <td><?php echo $mostar['contenido']?></td>
        <td><?php echo $mostar['autor']?></td>
        <td><?php echo $mostar['hora creacion']?></td>
        <td><?php echo $mostar['likes']?></td>
    
        </tr>
        <?php
        }
        ?>
        
    </table>
    
    
    
    
</body>
</html>