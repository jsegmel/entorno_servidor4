<!doctype html>
<div class="div1">
<?php
include("vistas/list_noticias.php");

?>
</div>


<div class="for_u">


         <h3>Nueva noticia</h3>
    <table>
         <form method="post" action= "conexion/comprobar.php">
         
         
         <p>TÍTULO<input  name="titulo" type="text"></p><br><br>

         <p>AUTOR<input name="autor" type="text"></p><br>
         
        <p><textarea name="textarea"  >Introduzca su noticia, con un limite de 300 caracteres </textarea></p><br>
         
          <input type="reset" >  
          <input type="submit" name="enviar" >   
         </form>
    </table>
</div>





<div class="eu">

         <h3>Eliminar noticia</h3>
    <table>
         <form method="post"  action= "conexion/comprobar.php">
         
         
         <p>TITULO<input  name="titulo" type="text"></p><br><br>

         
          <input type="reset" >  
          <input type="submit" name="eliminar" >   
         </form>
    </table>

</div>





<div  class="mu">
    <h3>Modificar noticia</h3>
<table>
         <form method="post"  action= "conexion/comprobar.php">
         <p>ID<input name="id" type="number"></p>
       
         <p>TÍTULO<input  name="titulo" type="text"></p><br><br>

         <p>AUTOR<input name="autor" type="text"></p><br>
         
        <p><textarea name="textarea"  >Introduzca su noticia, con un limite de 300 caracteres</textarea>
            
       
          <input type="reset">  
          <input type="submit" name="modificar">   
         </form>
    </table>


</div>










