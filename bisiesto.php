<?php
    for($anho = 1970; $anho <= date("Y"); $anho++){

    if (($anho % 4 == 0 && $anho % 100 != 0) ||($anho %400 ==0 && $anho % 100 == 0)) {
        echo $anho." es BISIESTO!!! y tú y yo lo celebramos";
        echo "<br>";
    }
    else{
        echo $anho." NO es bisiesto";
        echo "<br>";
    }
}
?>