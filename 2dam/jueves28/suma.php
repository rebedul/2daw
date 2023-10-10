<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = [10,5,40,30,7];
        $acum = 0;
        for ($i=0; $i < sizeof($array) ; $i++) { 
            $acum = $acum + $array[$i];
        }
        echo "La suma de los elementos del array es: ".$acum."";

    ?>
</body>
</html>