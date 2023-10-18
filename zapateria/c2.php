<?php

include("con_db.php");
include("header.html");
echo "<link rel="icon" href="img/favicon.ico" type="image/x-icon">";


$codigo = $_POST['codigo'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$talla = $_POST['talla'];
$color = $_POST['color'];
$material = $_POST['material'];
$precio = $_POST['precio'];
$existencias = $_POST['existencias'];

//----  INICIO COMPROBACIÓN INDICE DUPLICADO 

$sql = "SELECT * FROM articulos WHERE codigo = $codigo";
$resultadox = mysqli_query($conexion,$sql);
//COMPROBACIÓN SI YA EXISTE EL CÓDIGO
if (!mysqli_num_rows($resultadox)){     //Con la negación (!), esperamos un resultado 0 (no existe clave en tabla)

        $mandato = "INSERT INTO articulos (codigo,marca,tipo,tallas,color,material,precio,existencias) 
                    VALUES ('$codigo','$marca','$tipo','$talla','$color','$material','$precio','$existencias')";
        $resultado = mysqli_query ($conexion,$mandato);

        if ($resultado){
            echo "<p class='exito'>Registro del artículo </p>".$marca."<p class='exito'> grabado con éxito</p><br>"; // si éxito, aplicamos CSS
            echo "Devolviendo al FORMULARIO principal...<br>";
            header("Refresh: 1; url=c1.php");
        }
        else{

            echo "El código ".$codigo." que intentas grabar ya existe";
        }
}
else{

    echo "ALTO AHÍ: ".$codigo." YA EXISTE!!!";
}
//---- FIN COMPROBACIÓN
?>