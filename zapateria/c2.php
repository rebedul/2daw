<?php

include("con_db.php");
include("header.html");

echo "<link rel='stylesheet' href='./css/style.css'>";

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

if (!mysqli_num_rows($resultadox)){     //Con la negación (!), esperamos un resultado 0 (no existe clave en tabla)

        $mandato = "INSERT INTO articulos (codigo,marca,tipo,tallas,color,material,precio,existencias) 
                    VALUES ('$codigo','$marca','$tipo','$talla','$color','$material','$precio','$existencias')";
        $resultado = mysqli_query ($conexion,$mandato);

        if ($resultado){
            echo "<p class='exito'>Registro del artículo </p>".$marca."<p class='exito'> grabado con éxito</p><br>"; // si éxito, aplicamos CSS
            echo "Devolviendo al FORMULARIO principal...<br>";
            header("Refresh: 1; url=c1.html");
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