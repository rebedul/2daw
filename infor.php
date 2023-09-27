<?php

    $nombre = "Felipe Froilán de todos los santos";
    echo strlen($nombre);
    echo "<br>";

    $salario = 1500.50;
    echo gettype($salario);
    echo "<br>";

// CÁLCULO de la DIFERENCIA entre dos fechas.
// Posible problema: está contando un día menos 

    $date1 = new DateTime("2023-10-01");
    // $date2 = new DateTime("2023-09-26");
    $date2 = new DateTime();


    $diff = $date1->diff($date2);

    // Deben salir 4 días
    echo $diff->days . ' días  ';

    


?>
