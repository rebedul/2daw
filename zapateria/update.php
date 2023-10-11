<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICACIONES ARTÍCULOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<iframe src="header.html" width="100%" height="50px" frameborder="0"></iframe>

    <?php
        include("con_db.php");
        $id = $_GET['codigo'];
        $sql = "SELECT * FROM articulos WHERE codigo = $id";
        $resultado = mysqli_query($conexion,$sql);
        $mostrar = mysqli_fetch_array($resultado);
     
    ?>

    <form action="update2.php" method="post" autocomplete="off">
        <!-- VALUE: valor que procede de la Tabla ARTICULOS, que entendermos 'por defecto' para cada campo -->
        <input type="text" name="codigo" autofocus placeholder="Código" value="<?php echo $mostrar['codigo']?>"><br>
        <input type="text" name="marca" placeholder="Marca" value="<?php echo $mostrar['marca']?>"><br>
        <input type="text" name="tipo" placeholder="Tipo" value="<?php echo $mostrar['tipo']?>"><br>
        <input type="text" name="talla" placeholder="Talla" value="<?php echo $mostrar['tallas']?>"><br>
        <input type="text" name="color" placeholder="Color" value="<?php echo $mostrar['color']?>"><br>
        <input type="text" name="material" placeholder="Material" value="<?php echo $mostrar['material']?>"><br>
        <input type="text" name="precio" placeholder="Precio" value="<?php echo $mostrar['precio']?>"><br> 
        <input type="text" name="existencias" placeholder="Existencias" value="<?php echo $mostrar['existencias']?>"><br>

        <input type="submit" value="ENVIAR DATOS">
        
    </form>

    
</body>
</html>