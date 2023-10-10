<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i=1980; $i <=date("Y") ; $i++) { 
            if ($i % 4 == 0) {
                echo $i." SÍ es bisiesto <br>";
            }# code...
            else{
                echo $i." NO es bisiesto ni de broma...<br>";
                
            }
        }

    ?>
</body>
</html>