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
  <link rel="stylesheet" href="css/estilos.css">
  <title>Registro</title>
</head>

<body>
  <div class="contenedor1">
    <form class="" action="" method="post" autocomplete="off">
      <fieldset>
        <legend style="color:white;">Registro</legend>
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
    <a href="login.php">Login</a>
    </fieldset>
  </div>
  </body>

</html>

  <!--
  <h2>Registration</h2>
  <form class="" action="" method="post" autocomplete="off">
    <label class="form-check-label" for="usuario">Username : </label>
    <input type="text" class="form-control" name="usuario" id="usuario" required value="">
    <br>
    <label class="form-check-label" for="email">Email : </label>
    <input type="email" class="form-control" name="email" id="email" required value="">
    <br>
    <label class="form-check-label" for="contraseña">Password : </label>
    <input type="password" class="form-control" name="contraseña" id="contraseña" required value="">
    <br>
    <label class="form-check-label" for="confirmarC">Confirm Password : </label>
    <input type="password" class="form-control" name="confirmarC" id="confirmarC" required value="">
    <br>
    <button type="submit" class="btn btn-primary" name="submit">Register</button>
  </form>
  <br>
  <a href="login.php">Login</a>
</body>

</html>

-->