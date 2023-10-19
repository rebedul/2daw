<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    include("header.php");
    include("con_db.php");


    if ($conexion->connect_error) {
        die("Error en la conexión a la base de datos: " . $conexion->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $query = $conexion->real_escape_string($_POST['query']);

        $sql = "SELECT * FROM articulos WHERE marca LIKE '%$query%'";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<li class="quesevea">' . htmlspecialchars($row['marca']) .' '.htmlspecialchars($row['material']). '</li>';
            }
        } else {
            echo '<li>No se encontraron resultados.</li>';
        }

        $conexion->close();
    }

?>



</body>
</html>
