<?php
    include "./config.php";
    $email =$_POST['email'];
    $p1 =$_POST['p1'];
    $p2 =$_POST['p2'];
    if($p1 == $p2){
        $p1=sha1($p1);
        $conexion->query("update usuarios set contraseña='$p1' where email='$email' ")or die($conexion->error);
        echo "Todo bien";

    }else{
        echo "Las contraseñas no coinciden";
    }
?>