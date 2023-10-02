<?php

$lorem = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat illum mollitia eius rem molestias tempore quibusdam quos hic numquam similique modi excepturi aliquid ut harum autem architecto laudantium, ex magni.?";

$vocal = $_POST["vocal"];
echo strlen($lorem);

//Solución fácil: substr_count localiza un carácter en una cadena
$contador = substr_count($lorem,$vocal);

//Solución larga no deseable: recorrer con bucle FOR
// $contador = 0;
// for ($i=0; $i < strlen($lorem) ; $i++) { 
//     if  ($lorem[$i]==$vocal){
//         $contador = $contador +1;
//     }
// }

echo "La letra ".$vocal." aparece ".$contador." veces";


?>