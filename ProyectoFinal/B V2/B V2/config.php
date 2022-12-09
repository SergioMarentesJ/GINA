<?php
    SESSION_START();
    $servidor='localhost';
    $cuenta='root';
    $password='';
    $bd='bdproyecto';
     
    //conexion a la base de datos
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if (!$conexion){
         die("Error en la conexion");
    }

?>