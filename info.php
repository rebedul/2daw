<?php

    $nombre = "Felipe Froilán de todos los santos";
    $array = ["lun","mar","mie","jue","vie","sab","dom"];
    // for (ValorInicial;ValorFinal;Incremento)
    // for ($indice = 0; $indice < sizeof($array); $indice++)
    // {
    //     echo $array[$indice];
    //     echo "<br>";

    // }
        // echo strlen($nombre); //contamos longitud de una variable string
        echo sizeof($nombre);
        if (strlen($nombre) > 10 ){
            echo "VAYA ROLLO DE NOMBRE";
        }
            else {
                echo "Nombre normal, tiene ".strlen($nombre)." caracteres.";
            }

            $numero1 = 35;
            $numero2 = 20;
            echo ("<br>".$numero1 % $numero2);  //resto

            // ES PAR LA VARIABLE NUMERO1 ?

            if ($numero1 % 2 == 0){
                echo "PAR";
            }
                else{
                    echo "imPAR";
                }
    ?>