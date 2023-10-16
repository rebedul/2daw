<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICACIONES ARTÍCULOS</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
        <?php
            include("header.html");
        ?>

<!-- Datos que pasamos a UPDATE2.PHP -->
    <?php
        include("con_db.php");
        $id = $_GET['codigo'];
        $sql = "SELECT * FROM articulos WHERE codigo = $id";
        $resultado = mysqli_query($conexion,$sql);
        $mostrar = mysqli_fetch_array($resultado);
    ?>

    <div class="container">
    <form action="update2.php" method="post" autocomplete="off">
        <!-- VALUE: valor que procede de la Tabla ARTICULOS, que entendermos 'por defecto' para cada campo -->
        <label>Código....</label>
        <!-- Código será READONLY, no se puede cambiar -->
        <input type="text" name="codigo" autofocus readonly value="<?php echo $mostrar['codigo']?>"><br>
        <label>Marca.....</label>
        <input type="text" name="marca" value="<?php echo $mostrar['marca']?>"><br>
        <label>Tipo........</label>
        <input type="text" name="tipo" value="<?php echo $mostrar['tipo']?>"><br>
        <label>Tallas.....</label>
        <input type="text" name="talla" value="<?php echo $mostrar['tallas']?>"><br>
        <label>Color......</label>
        <input type="text" name="color" value="<?php echo $mostrar['color']?>"><br>
        <label>Material...</label>
        <input type="text" name="material" value="<?php echo $mostrar['material']?>"><br>
        <label>Precio.....</label>
        <input type="text" name="precio" value="<?php echo $mostrar['precio']?>"><br> 
        <label>Existencias</label>
        <input type="text" name="existencias" value="<?php echo $mostrar['existencias']?>"><br>
        <input type="submit" value="ENVIAR DATOS">
    </form>
    </div>

    
</body>
</html>