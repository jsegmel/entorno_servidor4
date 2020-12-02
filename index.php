<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
    <link rel="stylesheet" href="css/css.css" type="text/css" >
</head>

<body>
    
    
    
    <?php
      require "vistas/cabecera.php";
    ?>
    
    <?php
    if(isset($_GET['op'])){
        
       switch($_GET['op']){
               
           case 0:  
                 require("vistas/cuerpo.php");
            
               break;
           case 1:  
                 require("vistas/list_usuarios.php");
               break;
           case 2:  
                 require("vistas/list_noticias.php");
               break;
           
       }
        
    }
    
    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>