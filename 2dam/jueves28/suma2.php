<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = 0;
    for ($numero=1; $numero <=10 ; $numero++) { 
        if ($numero %2 ==0){
            echo "El número ".$numero." es PAR<br>";
        }
        else{
             echo "El número ".$numero." es IMPAR<br>";
           
        }# code...
    }
?>      
        
</body>
</html>
