<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/loginstyle.css" />
  </head>

  <body>
    <?php
    include("header.php");
    ?>
    
    <div class="conten">
      <form method="post" action="login2.php">
        <table>
          <tr>
            <td
              colspan="2"
              style="
                background-color: #000000;
                color: white;
                padding-bottom: 5px;
                padding-top: 5px;
              "
            >
              <label>Login</label>
            </td>
          </tr>
          <tr>
            <td rowspan="5"><img src="img/candado.png" /></td>
            <td><label>Usuario</label></td>
          </tr>
          <tr>
            <td><input type="text" name="username" /></td>
          </tr>
          <tr>
            <td><label>Password</label></td>
          </tr>
          <tr>
            <td><input type="password" name="password" /></td>
          </tr>
          <tr>
            <td><input type="submit" value="Iniciar sesión" /></td>

          </tr>
        </table>
      </form>

    </div> 
               <p class="centrar">¿No es usuario? Inscribase <a href="register.php">aqui</a></p>

  </body>
</html>
