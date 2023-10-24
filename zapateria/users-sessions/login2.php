<?php

session_start();

include("con_db.php");
include("header.php");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Supongamos que tienes el nombre de usuario y la contraseña introducida desde un formulario.
$usuario_intro = $_POST['username'];
$contrasena_intro = $_POST['password'];

// Consulta para obtener el hash almacenado en la base de datos para el usuario proporcionado.
$sql = "SELECT username, password FROM users WHERE username = ?";

if ($stmt = $conexion->prepare($sql)) {                  // Prepara la consulta con la instrucción SQL dada en $sql
    $stmt->bind_param("s", $usuario_intro);              // Enlaza el parámetro de la consulta ($usuario_intro) al marcador de posición. S=String  
    $stmt->execute();                                    // Ejecuta la consulta con los valores dados
    $stmt->bind_result($id_usuario, $hash_almacenado);   // username/password se vinculan a $id_usuario/$hash_almacenado
    $stmt->fetch();                                      // consigue el resultado de la consulta y lleva los valores de los campos a las variables
    $stmt->close();                                      // Cierra la sentencia preparada después de usarla 
}


// Verificar si el usuario existe y la contraseña coincide con el hash almacenado.
if ($hash_almacenado && password_verify($contrasena_intro, $hash_almacenado)) {
    echo "Inicio de sesión exitoso para el usuario con ID: $id_usuario<br>";
	$_SESSION["user"]=$id_usuario;						// $_SESSION: array especial para guardar info a través de los requests que hace un usuario
	echo "Sesión iniciada";								// A cada user que inicia sesión se le asigna un sessionID único que se almacenará en el CLIENTE
} else {												// cualquier otra info de la sesión se guardará en el servidor
    echo "Nombre de usuario o contraseña incorrectos "; // 'session handling': manejo de la sesión
}

// Cerrar la conexión a la base de datos
$conexion->close();

?>
