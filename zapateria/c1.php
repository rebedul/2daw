<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache,mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    
    <title>CRUD: Entrada de datos</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php
    include("header.html");
    ?>
    
   <div class="container">

       <form action="c2.php" method="post" autocomplete="off">
           
           <input type="text"  name="codigo" autofocus placeholder="Código"><br>
           <input type="text"  name="marca" placeholder="Marca"><br>
           <input type="text" name="tipo" placeholder="Tipo"><br>
           <input type="text" name="talla" placeholder="Talla"><br>
           <input type="text" name="color" placeholder="Color"><br>
           <input type="text" name="material" placeholder="Material"><br>
           <input type="text" name="precio" placeholder="Precio"><br> 
           <input type="text" name="existencias" placeholder="Existencias"><br>
   
           <input type="submit" value="ENVIAR DATOS">
           
       </form>
    
   </div> 
</body>

</html>