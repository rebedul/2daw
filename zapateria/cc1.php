<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache,mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    
    <title>CRUD: Entrada datos COLORES</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">


</head>

<body>

    <?php
    include("header.php");
    ?>
    
   <div class="container">

       <form action="cc2.php" method="post" autocomplete="off">
           
           <input type="text"  name="codcolor" autofocus placeholder="Código Color"><br>
           <input type="text"  name="nomcolor" placeholder="Nombre Color"><br>
   
           <input type="submit" value="ENVIAR DATOS">
           
       </form>
    
   </div> 
</body>

</html>