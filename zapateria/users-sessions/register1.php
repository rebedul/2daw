<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php
        include("header.php");
    ?>

    <h1>Registro de Usuarios</h1>
    <form action="register2.php" method="post">
        <label for="username">Nombre de usuario:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
