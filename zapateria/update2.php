<?php
// <<<< Datos procedentes de UPDATE.PHP
// Fichero con la CONEXION
include("con_db.php");
include("header.php");

echo "<link rel='stylesheet' href='./css/style.css'>";

$codigo = $_POST['codigo'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$talla = $_POST['talla'];
$color = $_POST['color'];
$material = $_POST['material'];
$precio = $_POST['precio'];
$existencias = $_POST['existencias'];


$mandato = "UPDATE articulos SET marca='$marca',tipo='$tipo',tallas='$talla',color='$color',material='$material',precio='$precio',existencias='$existencias' WHERE codigo= $codigo";

$resultado = mysqli_query ($conexion,$mandato);

// if ($resultado){
// echo "<p class='exito'>Modificación del artículo </p>".$marca."<p class='exito'> grabada con éxito</p><br>"; // si éxito, aplicamos CSS
// echo "Devolviendo al FORMULARIO principal...<br>";
header("Refresh: 0; url=read.php");
// }

?>