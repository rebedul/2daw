<?php

include("con_db.php");
include("header.php");
// echo "<link rel=\'icon\' href=\'img/favicon.ico\' type=\'image/x-icon\'>";



$codigo = trim($_POST['codigo']);
$marca = trim($_POST['marca']);
$tipo = trim($_POST['tipo']);
$talla = trim($_POST['talla']);
$color = $_POST['color'];
$material = $_POST['material'];
$precio = $_POST['precio'];
$existencias = $_POST['existencias'];

// INICIO TRATAMIENTO IMAGEN ORIGINAL
// $imagen = '';
// if(isset($_FILES['imagen'])) {      // ¿Tiene contenido el campo IMAGEN?
//     $file = $_FILES['imagen'];      //$_FILES contiene toda la info. de la imagen
//     $nombreImagen = $file['name'];  // El nombre que le dá el usuario a la imagen
//     $rutaProvisional = $file['tmp_name']; // Ruta provisional que PHP dá a la imagen
//     $sizeImage = $file['size'];     // Tamaño en bytes
//     $tipo = $file['type'];          // TIPO de fichero
//     echo "El nombre de la imagen es ".$nombreImagen;
// }
//     $src = 'img/'.$nombreImagen;    // Ruta en la que se encuentra REALMENTE la imagen
//     move_uploaded_file($rutaProvisional, $src);
//     $imagen = 'img/'.$nombreImagen; // Composición de la ruta final 
// FIN TRATAMIENTO IMAGEN ORIGINAL

$imagen='';
if (isset($_FILES['imagen'])){
    $file = $_FILES['imagen'];
    $nombreimagen = $file['name'];
    $tipo = $file['type'];
    $ruta_provisional = $file['tmp_name'];
    $size = $file['size'];
}
// 2dawphp/zapateria/
$src = 'img/'.$nombreimagen;
move_uploaded_file($ruta_provisional, $src);
$imagen = '../img/'.$nombreimagen;






//----  INICIO COMPROBACIÓN INDICE DUPLICADO 

$sql = "SELECT * FROM articulos WHERE codigo = '$codigo'";
$resultadox = mysqli_query($conexion,$sql);
//COMPROBACIÓN SI YA EXISTE EL CÓDIGO
if (!mysqli_num_rows($resultadox)){     //Con la negación (!), esperamos un resultado 0 (no existe clave en tabla)

        $mandato = "INSERT INTO articulos (codigo,marca,tipo,tallas,color,material,precio,existencias,imagen) 
                    VALUES ('$codigo','$marca','$tipo','$talla','$color','$material','$precio','$existencias','$imagen')";
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