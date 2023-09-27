<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv=”Content-Type” content=”text/html; charset=ISO-8859-1″ />    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Etiqueta que otorga formato a la parte PHP -->
    <?php
    $nombre = "Pepe";
    $apellido1 = "Rodríguez";
    // mb_strtoupper pondrá tilde a las vocales
    echo mb_strtoupper($nombre." ".$apellido1);
    ?>
</body>
</html>