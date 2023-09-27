<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Captamos la fecha del sistema
    $dia = date("d");
    echo "El día de hoy es ".$dia;
    // DEL 1 AL 10 ATENCIÓN PRESENCIAL
    if ($dia>=1 && $dia<=10) {
        echo "ATENCIÓN PRESENCIAL, hoy es ".$dia;
    }
    // DEL 11 AL 20 ATENCIÓN TELEMÁTICA
    if ($dia>=11 && $dia<=20) {
        echo "ATENCIÓN TELEMÁTICA, hoy es ".$dia;
    }
    
    // DEL 21 EN ADELANTE, NO ATENDEMOS
    if ($dia>=21) {
        echo "NO ATENDEMOS porque hoy es ".$dia;
    }
  
    ?>

</body>
</html>