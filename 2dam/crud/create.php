<?php

include("con_db.php");

echo '<link href="/css/style.css" type="text/css" rel="stylesheet">';


// if ($conexion){
//     echo "Conexión CORRECTA";
// }
// else{
//     echo "Falló como una escopeta de feria...";
// }

$username = $_POST['username'];
$password = $_POST['password'];
$fname = $_POST['name'];
$lname = $_POST['lastname'];
$fecha = $_POST['fechanac'];

// inicio COMPROBACIÓN POSIBLE CLAVE DUPLICADA

$compruebo = "SELECT * FROM usuarios WHERE username = '$username'";
$comprofinal = mysqli_query($conexion,$compruebo);
$resultado = "";

if (mysqli_num_rows($comprofinal) == 0){

    $mandato = "INSERT INTO usuarios (username,password,fname,lname) VALUES ('$username',MD5('$password'),'$lname','$fname')";
    $resultado = mysqli_query($conexion,$mandato);
        
    }
    else{
        echo $username." YA EXISTE, AMIGUITO<br>";
    }
if ($resultado){
    echo "<p class='ok'>";
    echo "Registro ".$username." grabado correctamente<br>";
    echo "</p>";
    echo "Regresando al formulario...";
    header("Refresh:3; url=create.html");    
    }






else{
    echo "ERROR en la grabación";
}


?>