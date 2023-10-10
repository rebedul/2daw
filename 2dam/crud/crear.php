<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p class="titulo">ALTAS DE REGISTROS</p>
    <?php
        $finalfeliz = "";
        echo $finalfeliz;
    ?>
    <form action="crear.php" method="post">
        <input type="text" name="username" placeholder="Nombre"><br>
        <input type="password" name="password" placeholder="contraseña"><br>
        <input type="text" name="name" placeholder="Nombre propio"><br>
        <input type="text" name="lastname" placeholder="Apellidos"><br><BR>
        <input type="date" name="fechanac"><br>

        <button type="submit" value="ENVIARDATOS">ENVIAR DATOS</button>
    </form>

    <!-- PROCESO DE LA INFORMACIÓN, PHP EN VENA -->
    <?php

//"server","usuario","password","basedatos"
$conexion = mysqli_connect("localhost","root","","plata");


// echo '<link href="/css/style.css" type="text/css" rel="stylesheet">';

$username = $_POST['username'];
$password = $_POST['password'];
$fname = $_POST['name'];
$lname = $_POST['lastname'];
$fecha = $_POST['fechanac'];

// inicio COMPROBACIÓN POSIBLE CLAVE DUPLICADA

$compruebo = "SELECT * FROM usuarios WHERE username = '$username'";
$comprofinal = mysqli_query($conexion,$compruebo);
$resultado = "";

if (mysqli_num_rows($comprofinal) == 0){

    $mandato = "INSERT INTO usuarios (username,password,fname,lname) VALUES ('$username',MD5('$password'),'$lname','$fname')";
    $resultado = mysqli_query($conexion,$mandato);
        
    }
    else{
        echo $username."> YA EXISTE, AMIGUITO<br>";
    }
if ($resultado){
    echo "<p class='ok'>";
    $finalfeliz = "> Registro ".$username." grabado correctamente<br>";
    echo $finalfeliz;
    echo "</p>";
    }

else{
    echo "ERROR en la grabación";
}
?>
    
</body>
</html>