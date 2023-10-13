<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
       //include("con_db.php");
       //otro procedimiento que sustituya a 'include'
       require_once("con_db.php");
       $conexion = mysqli_connect($servidor,$usuario,$pass,$db);
    ?>
    <table border=1>
        <tr>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>NombrePropio</th>
            <th>Apellidos</th>
        </tr>
    <?php
        $sql = "SELECT * from USUARIOS order by username";
        $resul = mysqli_query($conexion,$sql);
        while ($fila = mysqli_fetch_array($resul)){
    ?>
    <tr>
        <td><?php echo $fila['username']; ?></td>
        <td><?php echo $fila['password']; ?></td>
        <td><?php echo $fila['fname']; ?></td>
        <td><?php echo $fila['lname']; ?></td>
    </tr>
    <?php
    }
    ?>
    </table>
         
</body>
</html>