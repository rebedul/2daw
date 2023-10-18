<?php
// <<<< Datos procedentes de UPDATECOLOR.PHP
// Ficheros con la CONEXION y CABECERA
include("con_db.php");
include("header.html");

echo "<link rel='stylesheet' href='./css/style.css'>";

$codcolor = $_POST['codcolor'];
$nomcolor = $_POST['nomcolor'];


$mandato = "UPDATE colores SET nomcolor='$nomcolor' WHERE codcolor= $codcolor";

$resultado = mysqli_query ($conexion,$mandato);

// if ($resultado){
// echo "<p class='exito'>Modificación del artículo </p>".$marca."<p class='exito'> grabada con éxito</p><br>"; // si éxito, aplicamos CSS
// echo "Devolviendo al FORMULARIO principal...<br>";
header("Refresh: 0; url=readcolor.php");
// }

?>