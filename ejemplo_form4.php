<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo Form4</title>
    </head>
    <body>
        <?php
        $nombre = false;
        $apell = false;
        $modulos = false;
        $errores = false;
        if (isset($_POST['enviar'])) {
            if (!empty($_POST['nombre'])) {
                $nombre = true;
                $errores = true;
            }
            if (!empty($_POST['apell'])) {
                $apell = true;
                $errores = true;
            }
            if (isset($_POST['modulos'])) {
                $modulos = true;
                $errores = true;
            }
        }
        if (isset($_POST['enviar']) && $nombre == true && $apell == true && $modulos == true) {

            echo "Nombre: " . $_POST['nombre'] . "<br>";
            echo "Apellidos: " . $_POST['apell'] . "<br>";

            foreach ($_POST["modulos"] as $valor) {
                echo "$valor, ";
            }
            echo '<a href=""> Atras </a>';
        } else {
            ?>
            <form action="" method="POST">
                Nombre : <input type="text" name="nombre" value="<?php if (($errores == true) && ($nombre == true)) echo $_POST['nombre']; ?>">
                <?php if ($nombre == false && isset($_POST['enviar'])) echo "<span style='color:red'>El nombre no puede estar vacío</span>"; ?><br>
                Apellidos : <input type="text" name="apell" value="<?php if ($errores == true && $apell == true) echo $_POST['apell']; ?>">
                <?php if ($apell == false && isset($_POST['enviar'])) echo "<span style='color:red'>El apellido no puede estar vacío</span>"; ?><br>

                Modulos : <?php if ($modulos == false && isset($_POST['enviar'])) echo "<span style='color:red'>El modulo no puede estar vacío</span>"; ?><br>
                DWES:<input type="checkbox" name="modulos[]" value="DWES" <?php if (($modulos == true) && in_array("DWES", $_POST['modulos'])) echo 'checked'; ?>> <br>
                DWEC:<input type="checkbox" name="modulos[]" value="DWEC" <?php if (($modulos == true) && in_array("DWEC", $_POST['modulos'])) echo 'checked'; ?>> <br>
                DAW:<input type="checkbox" name="modulos[]" value="DAW" <?php if (($modulos == true) && in_array("DAW", $_POST['modulos'])) echo 'checked'; ?>> <br>
                <input type="submit" name="enviar" value="Enviar datos"><br>
            </form>
            <?php
        }
        ?>

    </body>
</html>