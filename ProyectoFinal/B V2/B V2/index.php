<?php
  require 'config.php';
  if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id = $id");
    $row = mysqli_fetch_assoc($resultado);
  }else{
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>Welcome <?php echo $row["usuario"]; ?></h1>
    <a href="logout.php">Logout</a>
  </body>
</html>
