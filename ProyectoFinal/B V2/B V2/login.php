<?php
require 'config.php';

if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}
if (isset($_POST["submit"])) {
  $usuarioemail = $_POST["usuarioemail"];
  $contraseña = md5($_POST["contraseña"]);
  $resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuarioemail' OR email = '$usuarioemail'");
  $row = mysqli_fetch_assoc($resultado);
  if (mysqli_num_rows($resultado) > 0) {
    if ($contraseña == $row['contraseña']) {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: ../../index.php");
    } else {
      echo "<script> alert('Contraseña Incorrecta'); </script>";
    }
  } else {
    echo "<script> alert('Usuario no registrado'); </script>";
  }
}




?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Silky</title>
  <link rel="icon" type="image/jpg" href="../../images/Silky.jpeg">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
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

  <a href="#" class="user"><i class="ri-user-fill"></i>Sign In</a>
    <a href="../B V2/registration.php">Register</a>
    <div class="bx bx-menu" id="menu-icon"></div>
  </div>
</header>

<body>

  <div class="contenedor1">
    <form class="" action="" method="post" autocomplete="off">
      <fieldset>
        <legend style="color:black;">Login</legend>
        <div class="mb-3">
          <label for="usuarioemail">Usuario o Email: </label>
          <input type="text" class="form-control" name="usuarioemail" id="usuarioemail" required value="">
        </div>
        <div class="mb-3">
          <label for="contraseña">Contraseña: </label>
          <input type="password" class="form-control" name="contraseña" id="contraseña" required value="">
        </div>
        <button id="login-btn" type="submit" class="btn btn-primary" name="submit" style="background:gray; border-color: gray;">Login</button>
    </form>
    <br>
    <br>
    <a href="../restablecer.php">¿Olvidaste tu contraseña?</a>

    </fieldset>
    
  </div>
  <?php
    include "footer.html";
    ?>
</body>

</html>