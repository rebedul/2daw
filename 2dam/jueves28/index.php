<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = 10;
        $num2 = 20;
        $numx = 0;
        echo "El número 1 es ".$num1;
        echo "<br>";
        echo "El número 2 es ".$num2;
        echo "<br>";
        $numx = $num1;
        $num1 = $num2;
        $num2 = $numx;
        echo "El número 1 es ".$num1;
        echo "<br>";
        echo "El número 2 es ".$num2;
        echo "<br>";
        
        

    ?>
</body>
</html>