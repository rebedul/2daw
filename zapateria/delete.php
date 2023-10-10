<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("header.html");
        include("con_db.php");

        $codigo = $_GET['codigo']; //LLEGA DE READ.PHP, BOTÓN "BORRAR"
        $sql = "DELETE FROM articulos WHERE codigo = $codigo";

        $mandato = mysqli_query($conexion,$sql);

        if ($mandato){
            echo "Registro ".$codigo." BORRADO CORRECTAMENTE";
            header("Refresh: 2; url=read.php");
        }
        else{
            echo "NO HAY CONEXIÓN, O VETE TÚ A SABER...";
        }
    ?>
</body>
</html>