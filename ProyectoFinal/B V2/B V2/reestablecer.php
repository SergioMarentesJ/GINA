<?php
    include "config.php";
    $email =$_POST['email'];
    $bytes = random_bytes(5);
    $token =bin2hex($bytes);

    include "email.php";
    if($enviado){
        $conexion->query(" insert into usuarios(email, token, codigo)
        values('$email','$token','$codigo') ") or die($conexion->error);
        echo '<p>Verifica tu email para reestablecer tu cuenta</p>';
    }


?>