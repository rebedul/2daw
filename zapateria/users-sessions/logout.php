<?php
session_start();

// Elimina todas las variables de sesión
session_unset();

// Por si acaso, anulamos todas las variables de sesión llevándolas a un array vacío
$_SESSION = array(); 

// Eliminamos la cookie de sesión del lado del cliente. Evitamos que el navegador mantenga una referencia a la sesión
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

// Destruye la sesión
session_destroy();

// Redirige al usuario a una página de inicio de sesión o a donde desees después del cierre de sesión.
header("Location: login1.php");
exit();
?>
