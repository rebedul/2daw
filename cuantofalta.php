<?php 

    $mifecha = new DateTime($_POST['fechafinal']);
    $hoy = new DateTime();

    $diferencia = $hoy ->diff($mifecha);
    $dias=$diferencia->days;

    echo "La diferencia es de $dias dias";

?>






