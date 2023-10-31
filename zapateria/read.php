<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD: LISTAR REGISTROS de ARTÍCULOS</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <!-- LO LLAMAMOS DESDE EL ONCLICK DEL BOTÓN -->
<script>
    function confirmacion(){
        var respuesta=confirm("¿Tiene la seguridad de querer borrar el registro?");
        if(respuesta==true){
            return true;
        }else{
            return false;
        }
    }
</script>



<body>
    <div class="especial">
        <?php
            include("header.php");
        ?>

    </div>

    <?php
        include("con_db.php");
        $sql = "SELECT * FROM articulos ORDER BY codigo";
        $result = mysqli_query($conexion,$sql);

        if (mysqli_num_rows($result)){          // SI HAY REGISTROS EN LA TABLA
        echo "<table border='1' cellpadding='0' cellspacing='0' align='center'>";
         echo "<tr>";
         
                echo "<th>Código</th>";         // CABECERA DE TABLA
                echo "<th>Marca</th>";
                echo "<th>Tallas</th>";
                echo "<th>Color</th>";
                echo "<th>Material</th>";
                echo "<th>Precio</th>";
                echo "<th>Existencias</th>";
                echo "<th> Imagen</th>";

                echo "<th>BORRAR</th>";
                echo "<th>MODIFICAR</th>";
            echo "</tr><br>";
            while ($mostrar = mysqli_fetch_array($result) ) { 
                echo "<tr>";                    // MOSTRAMOS REGISTROS
                    echo "<td>".$mostrar['codigo']."</td>";
                    echo "<td>".$mostrar['marca']."</td>";
                    echo "<td>".$mostrar['tallas']."</td>";
                    echo '<td>'.$mostrar['color'].'</td>';
                    echo "<td>".$mostrar['material']."</td>";
                    echo '<td class="derecha">'.$mostrar['precio'].'</td>';
                    echo '<td class="derecha">'.$mostrar['existencias'].'</td>';
                    // VERSIÓN HIPERVÍNCULO (deshabilitada):
                    // echo "<td><a href='delete.php?codigo=".$mostrar['codigo']."'>BORRAR</td>"; 
                    // mostramos IMAGEN
                    //echo '<td><img class="imgtabla" src="'.substr($mostrar['imagen'],3).'"</td>';

                    echo '<td><a href="'.substr($mostrar['imagen'],3).'"><img class="imgtabla" src="'.substr($mostrar['imagen'],3).'"</a></td>';



                }
        echo "</table>";

        }else{                                  // TAL VEZ NO HAYA DATOS
            echo "ATENCION, no hay registros para listar...";     
        }
        ?>

        
</body>
</html>