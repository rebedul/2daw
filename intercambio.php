<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- INTERCAMBIAMOS LOS VALORES DE DOS VARIABLES -->
    <?php
    echo "El primer número es  ".$numero1 = 10."<br>";
    echo "El segundo número es ".$numero2 = 20."<br>";

    $numerox = 10;
    $numero1 = $numero2;
    $numero2 = $numerox;

    echo "Nuevo número1 es ".$numero1."<br>";
    echo "Nuevo número2 es ".$numero2;

    




    
    ?>
</body>
</html>