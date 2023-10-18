<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD: MODIFICACIONES de COLORES</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

</head>
<body>
        <?php
            include("header.html");
        ?>

<!-- Datos que pasamos a UPDATECOLOR2.PHP -->
    <?php
        include("con_db.php");
        $codcolor = $_GET['codcolor'];
        $sql = "SELECT * FROM colores WHERE codcolor = $codcolor";
        $resultado = mysqli_query($conexion,$sql);
        $mostrar = mysqli_fetch_array($resultado);
    ?>

    <div class="container">
    <form action="updatecolor2.php" method="post" autocomplete="off">
        <!-- VALUE: valor que procede de la Tabla COLORES, que entendermos 'por defecto' para cada campo -->
        <label>Cód.Color.</label>
        <!-- Código será READONLY, no se puede cambiar -->
        <input type="text" name="codcolor" autofocus readonly value="<?php echo $mostrar['codcolor']?>"><br>
        <label>Nombre Color.</label>
        <input type="text" name="nomcolor" value="<?php echo $mostrar['nomcolor']?>"><br>

        <input type="submit" value="ENVIAR DATOS">
    </form>
    </div>

    
</body>
</html>