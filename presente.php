<?php
  
echo '<h1 class="cabecera">Instituto de Estudios Extraños</h1>';

// Aplicamos estilos, pero OJO!!! echo envuelve COMILLAS SIMPLES
echo '<link rel="stylesheet" href="./style.css">';

//Array de Censo con los valores iniciales
$censo = array("Gabriel","Pepe","Juan","María","Ana");
$presentes = $_POST['presentes'];

//explode: creo un array a partir de los nombres separados x comas
$presentes = explode(",",$presentes);
if (($presentes[0]) != ""){
  echo '<ul>';
  
    foreach ($presentes as $alumno) {

        //in_array: coincidencia datos Usuario->Censo
        if (in_array($alumno,$censo)){
            echo '<li>'.$alumno.' está presente</li>';
    }
    else{
        echo '<li>'.$alumno.' NO ESTÁ CENSADO</li>';
    }
    }
    //array_diff pintará los nombres que no coinciden
    $ausentes = array_diff($censo,$presentes);  
    foreach ($ausentes as $item) {
    echo '<li>'.$item.' está ausente</li>';
}
echo '</ul>';

}
else
{
    echo 'No se ha presentado nadie...!!!<br>';
}

?>
