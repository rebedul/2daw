<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache,mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    
    <title>CRUD: Entrada de datos ARTÍCULOS</title>

    <link rel="icon" href="img/favicon.ico" type="image/x-icon">


</head>

<body>

    <?php
    include("header.php");
    ?>
   <div class="supercontainer">
    <div class="container">

       <form action="c2.php" method="post" autocomplete="off">
           
           <input type="text"  name="codigo" autofocus placeholder="Código"><br>
           <input type="text"  name="marca" placeholder="Marca"><br>
           <input type="text" name="tipo" placeholder="Tipo"><br>
           <input type="text" name="talla" placeholder="Talla"><br>
           <!-- DESPLEGABLE buscando registros en la relacionada COLORES -->
           <select name="color">
           <?php
                include("con_db.php");
                $sql = "SELECT * FROM colores";
                $result = mysqli_query ($conexion,$sql);


                if (mysqli_num_rows($result)){          // SI HAY REGISTROS EN LA TABLA
                        while ($row = mysqli_fetch_assoc($result)) { 

                            echo "<option value='".$row['codcolor']."'>".$row['nomcolor']."</option>";                    // MOSTRAMOS REGISTROS

                        }
                    }else{
                        echo "<option value='No hay registros'> No hay Registros </option>";
                    }

            ?>
            </select>
            <!-- FIN DESPLEGABLE -->
            <br>
           <input type="text" name="material" placeholder="Material"><br>
           <input type="text" name="precio" placeholder="Precio"><br> 
           <input type="text" name="existencias" placeholder="Existencias"><br>
           <label for="imagen">Elija una imagen:</label>
           <input type="file" id="imagen" name="imagen">
            <br>
           <input type="submit" value="ENVIAR DATOS">
           
       </form>
    
    </div> 
   </div>


</body>

</html>