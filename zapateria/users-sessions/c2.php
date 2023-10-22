<?php

include("con_db.php");

// En su caso, inserción de fragmento HTML
// echo '<link href="css/styles.css" type="text/css" rel="stylesheet">';

if ($conexion){
    echo "Conexión establecida con éxito<br>";
}
else{
    echo"Error en la conexión: ".mysqli_connect_error();
}

$codigo = trim($_POST['codigo']);
$marca = trim($_POST['marca']);

// COMPROBACION CLAVE DUPLICADA - INICIO
$clave_primaria = $codigo;
$sql = "SELECT * FROM calzado WHERE codigo = $clave_primaria";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) == 0) {
    // Puedes proceder con la inserción
} else {
    echo "Error: La clave primaria ya existe en la tabla.";
}
// COMPROBACIÓN CLAVE DUPLICADA - FIN



$mandato = "INSERT INTO CALZADO (codigo,marca) VALUES ('$codigo','$marca')";

$resultado = mysqli_query($conexion,$mandato);

if ($resultado){
   echo "Registro ".$codigo." incluido con exito";
}

?>