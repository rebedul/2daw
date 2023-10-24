<?php
// Conexión a la base de datos (ajusta estos valores)
include("con_db.php");


// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Criptografiado  de la contraseña


// Verificar si el usuario ya existe
$sql = "SELECT username FROM users WHERE username = '$username'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    echo "El nombre de usuario ya está en uso. Por favor, revisa tu información y elige otro.";
} else {
    // Verificar si se ha alcanzado el máximo de usuarios permitidos
    $maxUsers = 10; // Cambia este valor según tu preferencia
    $userCount = $conexion->query("SELECT COUNT(username) AS count FROM users")->fetch_assoc()['count'];

    if ($userCount >= $maxUsers) {
        echo "Se ha alcanzado el máximo de usuarios permitidos. No se pueden registrar más usuarios en este momento.";
    } else {
        // Insertar el nuevo usuario en la base de datos
        $insertSQL = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if ($conexion->query($insertSQL) === TRUE) {
            echo "Registro OK. ¡Bienvenido, $username!";
        } else {
            echo "Error al registrar el usuario " . $conexion->error;
        }
    }
}

$conexion->close();
?>
