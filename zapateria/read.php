<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTAR REGISTROS</title>
    <link href="style.css" type="text/css" rel="stylesheet">

</head>
<body>
    <iframe src="header.html" width="100%" height="50px" frameborder="0"></iframe>

    <?php
        include("con_db.php");
        $sql = "SELECT * FROM articulos ORDER BY codigo";
        $result = mysqli_query($conexion,$sql);

        if (mysqli_num_rows($result)){          // SI HAY REGISTROS EN LA TABLA
        echo "<table border='1' cellpadding='0' cellspacing='0' align='center'>";
         echo "<tr>";
                echo "<th>Código</th>";         // CABECERA DE TABLA
                echo "<th>Marca</th>";
                echo "<th>Existencias</th>";
            echo "</tr><br>";
            while ($mostrar = mysqli_fetch_array($result) ) { 
                echo "<tr>";                    // MOSTRAMOS REGISTROS
                    echo "<td class='centro'>".$mostrar['codigo']."</td>";
                    echo "<td>".$mostrar['marca']."</td>";
                    echo "<td class='derecha'>".$mostrar['existencias']."</td>";
                echo "</tr>";          
                }
        echo "</table>";
    
        }else{                                  // TAL VEZ NO HAY DATOS
            echo "No hay registros!!!";     
        }
        ?>
</body>
</html>