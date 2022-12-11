<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}
if (isset($_POST["submit"])) {
  $usuario = $_POST["usuario"];
  $email = $_POST["email"];
  $contraseña = md5($_POST["contraseña"]);
  $confirmarC = md5($_POST["confirmarC"]);
  $dup = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' OR email = '$email'");
  if (mysqli_num_rows($dup) > 0) {
    echo "<script> alert('El nombre o el email ya fueron usados'); </script>";
  } else {
    if ($contraseña == $confirmarC) {
      $sql = "INSERT INTO usuarios VALUES('','$usuario','$email','','','','$contraseña')";
      mysqli_query($conexion, $sql);
      $para  = $email;
      $título = 'CUPON POR REGISTRARSE';
      $codigo= rand(1000,9999);

      $mensaje = '
      <html>
      <head>
        <title>GRACIAS POR FORMAR PARTE DE NUESTRO SITIO</title>
      </head>
      <body>
        <h1>SILKY</h1>
        <div style="text-align:center; background-color:#ccc">
          <h1>GRACIAS POR FORMAR PARTE DE NUESTRO SITIO</h1>
          <p>Su cupon es el siguiente:</p>
          <h3>'.$codigo.'</h3>
          </div>
      </body>
      </html>
      ';

      // Para enviar un correo HTML, debe establecerse la cabecera Content-type
      $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
      $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      /*
      // Cabeceras adicionales
      $cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
      $cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
      $cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
      $cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
      */
      // Enviarlo
      $enviado =false;
      if(mail($para, $título, $mensaje, $cabeceras)){
        $enviado=true;

      }
      echo "<script> alert('Has sido registrado con exito'); </script>";
    } else {
      echo "<script> alert('Las contraseñas no coinciden'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Registro</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

  <style>
    .container {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://escuelaemily.imgix.net/https%3A%2F%2Fi.pinimg.com%2Foriginals%2Fd5%2F83%2F54%2Fd5835434e5895b20056c9107c530030e.jpg?s=af3a2234086392e0f89378c4b92a3f82);
      -webkit-background-size: cover;
      background-size: cover;
      background-position: center center;
    }
  </style>
</head>

<header>
  <a href="../../index.php" class="logo"><i class="ri-home-heart-fill"></i><span>Silky</span></a>

  <ul class="navbar">
    <li><a href="../../index.php" class="active">Home</a></li>
    <li><a href="../../Tienda.php">Tienda</a></li>
    <li><a href="../../acerca_de.php">Acerca De</a></li>
    <li><a href="../../Contactanos.php">Contactanos</a></li>
    <li><a href="../../Ayuda.php">Ayuda</a></li>
  </ul>

  <div class="main">
    <a href="./capt.php" class="user"><i class="ri-user-fill"></i>Sign In</a>
    <a href="#">Register</a>
    <div class="bx bx-menu" id="menu-icon"></div>
  </div>
</header>
<br><br><br><br>

<body>
  <div class="contenedor1">
    <form class="" action="" method="post" autocomplete="off">
      <fieldset>
        <legend style="color:black;">Registro</legend>
        <div class="mb-3">
          <label class="form-check-label" for="usuario">Usuario : </label>
          <input type="text" class="form-control" name="usuario" id="usuario" required value="">
        </div>
        <div class="mb-3">
          <label class="form-check-label" for="email">Email : </label>
          <input type="email" class="form-control" name="email" id="email" required value="">
        </div>
        <div class="mb-3">
          <label class="form-check-label" for="contraseña">Contraseña : </label>
          <input type="password" class="form-control" name="contraseña" id="contraseña" required value="">
        </div>
        <div>
          <label class="form-check-label" for="confirmarC">Confirmar Contraseña : </label>
          <input type="password" class="form-control" name="confirmarC" id="confirmarC" required value="">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit" style="background:gray;">Registrarse</button>
    </form>
    <br>
    <br>
    </fieldset>
  </div>
  <?php
  include "footer.html";
  ?>
</body>

</html>