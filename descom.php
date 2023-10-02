<?php

$num = $_POST["num"];
echo "Número transmitido ".$num."<br>";

// Solución HUGO

for ($i=0; $i < strlen($num); $i++) { 
    echo $num[$i];
    for ($j=$i; $j < strlen($num)-1; $j++) {  
        echo 0;  // bucle para rellenar ceros
    }
    echo "<br>";
}

// Solución ADRIÁN

// $num = strrev($num);
// $num = str_split($num);
// for ($i=count($num)-1; $i >= 0; $i--) { 
//     echo $num[$i]*pow(10,$i)."<br>";
// }

?>