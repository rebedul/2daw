<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD: ELIMINACIÓN de ARTÍCULOS</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

</head>
<body>
    <?php
        include("header.php");
        include("con_db.php");

        $codcolor = $_GET['codcolor']; //LLEGA DE READ.PHP, BOTÓN "BORRAR"
        $sql = "DELETE FROM colores WHERE codcolor = $codcolor";

        $mandato = mysqli_query($conexion,$sql);
       


        if ($mandato){
            echo "Registro ".$codcolor." BORRADO CORRECTAMENTE";
            header("Refresh: 2; url=readcolor.php");
        }
        else{
            echo "NO HAY CONEXIÓN, O VETE TÚ A SABER...";
        }
    ?>


</body>
</html>