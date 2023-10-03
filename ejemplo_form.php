<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo Form</title>
    </head>
    <body>
        
        <form action="datos.php" method="POST">
            Nombre : <input type="text" name="nombre"><br>
            Apellidos : <input type="text" name="apell"><br>
            Modulos : <br><!-- comment -->
            DWES:<input type="checkbox" name="modulos[]" value="DWES" ><br>
            DWEC:<input type="checkbox" name="modulos[]" value="DWEC"><br>
            DAW:<input type="checkbox" name="modulos[]" value="DAW"><br>
            <input type="submit" name="enviar" value="Enviar datos"><br>
        </form>
        <a href="datos.php"> Ir a datos </a>
        
        <?php
            
            
       
        ?>
    </body>
</html>
