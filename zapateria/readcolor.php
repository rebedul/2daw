<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTAR COLORES</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">


</head>

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
            include("header.html");
        ?>

    </div>

    <?php
        include("con_db.php");
        $sql = "SELECT * FROM colores ORDER BY codcolor";
        $result = mysqli_query($conexion,$sql);

        if (mysqli_num_rows($result)){          // SI HAY REGISTROS EN LA TABLA
        echo "<table border='1' cellpadding='0' cellspacing='0' align='center'>";
         echo "<tr>";
                echo "<th>Código</th>";         // CABECERA DE TABLA
                echo "<th>Nombre del Color</th>";
                echo "<th>BORRAR</th>";
                echo "<th>MODIFICAR</th>";
            echo "</tr><br>";
            while ($mostrar = mysqli_fetch_array($result) ) { 
                echo "<tr>";                    // MOSTRAMOS REGISTROS
                    echo "<td>".$mostrar['codcolor']."</td>";
                    echo "<td>".$mostrar['nomcolor']."</td>";

                    echo "<td><button onclick='return confirmacion()'><a href='deletecolor.php?codcolor=".$mostrar['codcolor']."'>BORRAR ".$mostrar['codcolor']."</button></td>";
                    echo "<td><button><a href='updatecolor.php?codcolor=".$mostrar['codcolor']."'>MODIFICAR ".$mostrar['codcolor']."</button></td>";
                    echo "</tr>";          
                }
        echo "</table>";

        }else{                                  // TAL VEZ NO HAYA DATOS
            echo "ATENCION, no hay registros para listar...";     
        }
        ?>

        
</body>
</html>