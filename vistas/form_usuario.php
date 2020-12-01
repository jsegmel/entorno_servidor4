<!doctype html>

<?php
    

    if(!isset($_POST["accion"])){
        
        echo "Accion no definida";?><br>
        <a href="vistas/list_usuarios.php">Volver</a>
        <?php exit();
  
    }if($_POST["accion"]=="crear"){
        echo"Action POST:" . $_POST["accion"]." <br>";
        crear_usuario();
        
        
    }else{
        if(!isset($_POST["id"])){
        
        echo "ID no definido";?><br>
        <a href="../vistas/list_usuarios.php">Volver</a>
        <?php exit();
        echo"Action POST:" . $_POST["accion"] . "br";
        echo "Id POST:" .$_POST["id"] . "br"; 
    }

    }

    



    switch($_POST["accion"]){
        
        case "modificar":
        
        case "eliminar":
            
            
            
    }




    function crear_usuario(){
        ?>
            <form method="post"  action="../conexion/comprobar.php">
                 
                 <label for="nombre">NOMBRE</label>
                 <input name="nombre" type="text"><br><br>
                 <label for="contraseña">CONTRASEÑA</label>
                 <input  name="contraseña" type="text"><br><br>
                 <label for="email">E-MAIL</label>
                 <input name="email" type="text"><br><br>
                 <label for="edad">EDAD</label>   
                 <input name="edad" type="number"><br><br>
                 <label for="fechan">FECHA NACIMIENTO</label>
                 <input name="fechan" type="date"</p><br><br>
                 <label for="direccion">DIRECCION</label>
                 <input name="direccion" type="text">
                 <label for="cp">CODIGO POSTAL</label>
                 <input name="cp" type="text" >
                 <label for="provincia">PROVINCIA</label>
                 <input name="provincia">
                 <p>HOMBRE<input name="genero" type="radio" value="hombre">
                 MUJER<input name="genero" type="radio" value="mujer"></p><br>
                 <input type="reset">  
                 <input type="submit" name="enviaru" value="crear"></input>  
            </form>
        <?php
    }
 
        ?>
          
    









