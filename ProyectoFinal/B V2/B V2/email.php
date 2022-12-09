<?php
$para  = $email . ', ';

$título = 'Reestablecer contraseña';
$codigo= rand(1000,9999);

$mensaje = '
<html>
<head>
  <title>Reestablecer contraseña</title>
</head>
<body>
  <h1>Nombre de la pagina web</h1>
  <div style="text-align:center; background-color:#ccc">
    <p>Su contrasena es la siguiente:</p>
    <h3>'.$codigo.'</h3>
    <p> <a 
        href="http://localhost/cursophp/SOBAS/B%20V2/B%20V2/reset.php?email='.$email.'&token='.$token.'">
        Para reestablecer contrasena da click aqui </a> </p>
    <p> <small>Si usted no envio este codigo favor de omitir </small></p>
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

?>