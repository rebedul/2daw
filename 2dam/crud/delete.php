<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       require_once("con_db.php");
       $conexion = mysqli_connect($servidor,$usuario,$pass,$db);

       $username = $_POST['username'];

       $existe1 = "SELECT * FROM usuarios WHERE username = '$username'";
       $existe2 = mysqli_query($conexion,$existe1);
           
       if (mysqli_num_rows($existe2) == 1){
            // echo "Usuario ".$username." SÍ EXISTE<br>";  
            $sql="DELETE FROM usuarios WHERE username = '$username'";
            $orden = mysqli_query($conexion,$sql);
            echo "Usuario ".$username." BORRADO CORRECTAMENTE";
       }
        else{
            echo "Usuario ".$username." NO!!!!!! EXISTE";
       }
    ?>
   
</body>
</html>