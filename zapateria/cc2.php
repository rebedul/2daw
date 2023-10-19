<?php

include("con_db.php");
include("header.php");

echo "<link rel="icon" href="img/favicon.ico" type="image/x-icon">";


$codcolor = $_POST['codcolor'];
$nomcolor = $_POST['nomcolor'];


$sql = "SELECT * FROM colores WHERE codcolor = $codcolor";
$resultadox = mysqli_query($conexion,$sql);

//COMPROBACIÓN SI YA EXISTE EL CÓDIGO
if (!mysqli_num_rows($resultadox)){     //Con la negación (!), esperamos un resultado 0 (no existe clave en tabla)

        $mandato = "INSERT INTO colores (codcolor,nomcolor) VALUES ('$codcolor','$nomcolor')";
        $resultado = mysqli_query ($conexion,$mandato);

        if ($resultado){
            echo "<p class='exito'>Registro del color </p>".$nomcolor."<p class='exito'> grabado con éxito</p><br>"; // si éxito, aplicamos CSS
            echo "Devolviendo al FORMULARIO principal...<br>";
            header("Refresh: 0; url=cc1.php");
        }
        else{

            echo "El código ".$codcolor." que intentas grabar ya existe";
        }
}
else{

    echo "ALTO AHÍ: ".$codcolor." YA EXISTE!!!";
}
//---- FIN COMPROBACIÓN
?>