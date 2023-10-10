<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            // "fabricamos" los ceros que se van a mostrar después
            function calculateZeros(int $size) {
                $new_string = "";
                for ($i=0;$i< $size;$i++) {
                    $new_string = $new_string . 0;
            }
            return $new_string;
        }

        $string = "02588888547";
        $length = strlen($string);
        for ($i=0; $i <$length; $i++){
            print(substr($string,0,1).calculateZeros(strlen($string) -1)."<br>");
            $string = substr($string,1);
        }
   ?>
</body>
</html>