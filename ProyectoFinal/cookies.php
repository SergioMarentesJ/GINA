<?php

if(!empty($_POST["remember"])) {
    setcookie ("username",$_POST["username"],time()+ 3600);
    setcookie ("email",$_POST["email"],time()+ 3600);
    setcookie ("password",$_POST["password"],time()+ 3600);
    echo "Se ingresaron las cookies correctamente";
} else{
    setcookie("username","");
    setcookie ("email","");
    setcookie("password","");
    echo "No se ingresaron correctamente";
}

?>

<p><a href="index.php"> Go to Login Page </a> </p>