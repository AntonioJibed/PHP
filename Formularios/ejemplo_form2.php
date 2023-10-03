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

        <?php
        if(isset($_POST['enviar'])){
            echo "Nombre: ".$_POST['nombre']."<br>";
            echo "Apellidos: ".$_POST['apell']."<br>";

            foreach($_POST["modulos"] as $valor){
                echo "$valor, ";
            }
            echo '<a href="ejemplo_form2.php"> Ir a datos </a>';
        }
        else{
          ?>  
        <form action="" method="POST">
            Nombre : <input type="text" name="nombre"><br>
            Apellidos : <input type="text" name="apell"><br>
            Modulos : <br><!-- comment -->
            DWES:<input type="checkbox" name="modulos[]" value="DWES">
            DWEC:<input type="checkbox" name="modulos[]" value="DWEC">
            DAW:<input type="checkbox" name="modulos[]" value="DAW">
            <input type="submit" name="enviar" value="Enviar datos"><br>
        </form>
        
        
        <?php
        }       
        ?> 
    </body>
</html>
