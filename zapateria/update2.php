<?php
// <<<< Datos procedentes de UPDATE.PHP
// Fichero con la CONEXION
include("con_db.php");
include("header.php");

echo "<link rel='stylesheet' href='./css/style.css'>";

$codigo = $_POST['codigo'];
$marca = $_POST['marca'];
$talla = $_POST['talla'];
$color = $_POST['color'];
$material = $_POST['material'];
$precio = $_POST['precio'];
$existencias = $_POST['existencias'];

// INICIO ACOPLAMIENTO código cambio imagen
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

// FIN ACOPLAMIENTO código cambio imagen

$mandato = "UPDATE articulos SET marca='$marca',tallas='$talla',color='$color',material='$material',precio='$precio',existencias='$existencias' WHERE codigo= $codigo";

$resultado = mysqli_query ($conexion,$mandato);

header("Refresh: 0; url=read.php");
// }

?>