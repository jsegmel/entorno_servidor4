<?php
    

    if(!isset($_POST["accion"])){
        
        echo "Accion no definida";?><br>
        <a href="vistas/list_noticias.php">Volver</a>
        <?php exit();
  
    }if($_POST["accion"]=="crear"){
        echo"Action POST:" . $_POST["accion"]." <br>";
        crear_noticia();
        
        
    }else{
        if(!isset($_POST["id"])){
        
        echo "ID no definido";?><br>
        <a href="../vistas/list_noticias.php">Volver</a>
        <?php exit();
        echo"Action POST:" . $_POST["accion"] . "br";
        echo "Id POST:" .$_POST["id"] . "br"; 
    }

    }

    
 if($_POST["accion"]=="eliminar"){
        echo"Action POST:" . $_POST["accion"]." <br>";
        eliminar_noticia();
        
        
    }

if($_POST["accion"]=="modificar"){
        echo"Action POST:" . $_POST["accion"]." <br>";
       modificar_noticia();
        
        
    }
   
        
        
        
        


    function crear_noticia(){
        ?>
            <form method="post"  action="../conexion/comprobar.php">
                 
         
         
         <p>TÍTULO<input  name="titulo" type="text"></p><br><br>

         <p>AUTOR<input name="autor" type="text"></p><br>
         
        <p><textarea name="textarea"  >Introduzca su noticia, con un limite de 300 caracteres </textarea></p><br>
         
          <input type="reset" >  
          <input type="submit" name="enviar" >   
         
            </form>
        <?php
    }
    function eliminar_noticia(){
          
        ?>
         
         <form method="post"  action="../conexion/comprobar.php">
                 <input name="id" type="hidden" value=<?php echo $_POST["id"]?></input>
                 <input type="submit" name="eliminar" value="eliminar"></input>
            </form>
        <?php
           
         }
     function modificar_noticia() {
     ?>

        
         <form method="post"  action="../conexion/comprobar.php">
                 <input name="id" type="hidden" value=<?php echo $_POST["id"]?></input>
                 <input name="autor" type="text" value=<?php echo $_POST["autor"]?></input>
             
             
                 <input type="submit" name="modificar" value="modificar"></input>
            </form>










     <?php
     }

     ?>