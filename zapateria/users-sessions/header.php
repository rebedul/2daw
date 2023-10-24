<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTIÓN DE USUARIOS</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- $_SERVER es una variable superglobal. REMOTE_ADDR contiene la IP del visitante -->

    <?php
    $ip_visitante = $_SERVER['REMOTE_ADDR']; 
    echo "La dirección IP de tu visitante es: " . $ip_visitante;
?>

    <div class="ht">
        <a href="index.php">GESTIÓN DE USUARIOS Y SESIONES</a>
    </div>
</body>
</html>