<?php

$lorem = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat illum mollitia eius rem molestias tempore quibusdam quos hic numquam similique modi excepturi aliquid ut harum autem architecto laudantium, ex magni.?";

$vocal = $_POST["vocal"];
$reemplazo = $_POST["reemplazo"];

//Solución fácil: substr_count localiza un carácter en una cadena
$texto = str_replace($vocal,$reemplazo,$lorem);
$contador = substr_count($lorem,$vocal);

echo "<br>";
echo $texto."<br>";
echo "Se han efectuado ".$contador." reemplazos";


//Solución larga no deseable: recorrer con bucle FOR
// $contador = 0;
// for ($i=0; $i < strlen($lorem) ; $i++) { 
//     if  ($lorem[$i]==$vocal){
//         $contador = $contador +1;
//     }
// }



?>