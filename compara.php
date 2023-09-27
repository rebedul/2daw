<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>


<body>
    <div class="cabecera">
    Operaciones con NÚMEROS

    </div>



    <?php
    $num1=8;
    $num2=3;
    $num3=5;


    echo "Igualdad  ".($num1 == $num2); //IGUAL
    echo "<br>";

    echo "Distinto  ".($num1 != $num2); //DISTINTO
    echo "<br>";
   
    echo "Mayor que ".($num1 > $num2); //MAYOR QUE
    echo "<br>";

    $acum=0;
    $array=[34,18,5,1,20];
    for ($i=0 ; $i < count($array)  ; $i++ ) { 
        $acum = $acum + $array[$i];
    }
        echo "La SUMA final es ".$acum;
        echo "<br>";
        echo "El PROMEDIO es ".$acum/count($array);
        echo "<br>";

        sort($array);
        print_r($array);

        $puntero=intval(count($array)/2);
        echo "<br>"."La posición central del array es ".$puntero;
        echo "<br>";
        echo "La MEDIANA es ".$array[$puntero];
        echo "<br>";
        // Generamos número ALEATORIO
        $alea = rand(1,50);
        echo "Número aleatorio generado por PHP: ".$alea;
    ?>

</body>
</html>



