<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    for ($valor=0; $valor<=30 ; $valor++) { 
       if ($valor %2 ==0) {
        echo $valor." es PAR <br>";
       }
       else {
        echo "<p class='impar'>".$valor."  es IMPAR<br></p>";  //Asignamos CLASE para el COLOR
       }  
    }
    ?>


</body>
</html>