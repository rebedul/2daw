<?php
session_start(); 
?> 
<html> 
<head> 
<title>Leo variable de sesión</title> 
</head> 
<body> 
<?php 
echo "ID de sesión:      ".session_id()."<br>";
if (isset($_SESSION['user'])) {
    $nombre_usuario = $_SESSION['user'];
    echo "Nombre Usuario: ".$nombre_usuario;
    // Aquí puedes utilizar $nombre_usuario como el nombre de usuario del usuario autenticado
} else {
    // No hay una sesión válida, puedes redirigir al usuario o tomar alguna otra acción
}
?> 

</body> 
</html>