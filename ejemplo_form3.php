<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo Form3</title>
    </head>
    <body>

        <?php
        if (isset($_POST['enviar'])) {
            if (!empty($_POST['nombre']) && !empty($_POST['apell']) && isset($_POST['modulos'])) {

                echo "Nombre: " . $_POST['nombre'] . "<br>";
                echo "Apellidos: " . $_POST['apell'] . "<br>";

                foreach ($_POST["modulos"] as $valor) {
                    echo "$valor, ";
                }
                echo '<a href=""> Atras </a>';
            } else {
                ?>  
                <form action="" method="POST">
                    Nombre : <input type="text" name="nombre" value="<?php if (!empty($_POST['nombre'])) echo $_POST['nombre'] ?>">
                    <?php if (empty($_POST['nombre'])) echo "<span style='color:red'>El nombre no puede estar vacío</span>"; ?> <br>

                    Apellidos : <input type="text" name="apell" value="<?php if (!empty($_POST['apell'])) echo $_POST['apell'] ?>">
                    <?php if (empty($_POST['apell'])) echo "<span style='color:red'>El apellido no puede estar vacío</span>"; ?> <br>

                    Modulos :<?php if (!isset($_POST['modulos'])) echo "<span style='color:red'>El modulo no puede estar vacío, elige al menos uno</span>"; ?> <br>
                    DWES:<input type="checkbox" name="modulos[]" value="DWES" <?php if (isset($_POST['modulos']) && (in_array("DWES", $_POST['modulos']))) echo 'checked=true'; ?>> <br>
                    DWEC:<input type="checkbox" name="modulos[]" value="DWEC" <?php if (isset($_POST['modulos']) && (in_array("DWEC", $_POST['modulos']))) echo 'checked=true'; ?>> <br>
                    DAW:<input type="checkbox" name="modulos[]" value="DAW" <?php if (isset($_POST['modulos']) && (in_array("DAW", $_POST['modulos']))) echo 'checked=true'; ?>> <br>
                    <input type="submit" name="enviar" value="Enviar datos"><br>
                </form>
                <?php
            }
        } else {
            ?>
            <form action="" method="POST">
                Nombre : <input type="text" name="nombre"><br>
                Apellidos : <input type="text" name="apell"><br>
                Modulos : <br><!-- comment -->
                DWES:<input type="checkbox" name="modulos[]" value="DWES"><br>
                DWEC:<input type="checkbox" name="modulos[]" value="DWEC"><br>
                DAW:<input type="checkbox" name="modulos[]" value="DAW"><br>
                <input type="submit" name="enviar" value="Enviar datos"><br>
            </form>
            <?php
        }
        ?> 
    </body>
</html>
