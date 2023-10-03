<?php
if(isset($_POST['enviar'])){
    echo "Nombre: ".$_POST['nombre']."<br>";
    echo "Apellidos: ".$_POST['apell']."<br>";

    foreach($_POST["modulos"] as $valor){
        echo "$valor, ";
    }
}
else{
    header("Location:ejem_form.php");
}

?>


<a href="ejemplo_form.php"> Ir a datos </a>
