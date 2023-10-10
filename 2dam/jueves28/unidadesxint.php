<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // pasará al cálculo inferior el divisor
    function getDivisor(int $size){
        $div = 1;
        for ($i=0; $i <$size; $i++){
            $div =$div *10;
        }
        return $div;
    }

    $numero = -451;
    $length = strlen(abs($numero)); // devolverá 3
    for ($i=0; $i <$length;$i++){
        $to_remove = $numero % getDivisor(strlen(abs($numero))-1);  //llevo a la function la longitud del número
          echo (($numero - $to_remove) . "<br>"); // numero original menos el resto
          $numero = $to_remove; //asignamos en 1ª pasada el "21", segunda pasada un "1!
    }
   ?>
</body>
</html>