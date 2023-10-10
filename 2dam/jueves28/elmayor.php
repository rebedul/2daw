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
        rsort($relacion);
        echo "El MÍNIMO es ".$relacion[4]."<br>";
        sort($relacion);
        echo "El MÁXIMO es ".$relacion[4]."<br>";
    ?>
</body>
</html>