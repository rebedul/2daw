<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frase = "En un lugar de la Mancha";
        // echo strlen($frase);
        $relacion = array(2,4,10,40,7);
        echo $relacion[4];
        $acum = 0;
        for ($i=0; $i < sizeof($relacion) ; $i++) { 
             $acum = $acum + $relacion[$i];
        }
        echo "La suma final es ".$acum."<br>";
        echo "FIN del programa"
    ?>
</body>
</html>