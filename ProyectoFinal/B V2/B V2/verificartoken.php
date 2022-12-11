<?php
    include "./config.php";
    $email =$_POST['email'];
    $token =$_POST['token'];
    $codigo =$_POST['codigo'];
    $res=$conexion->query("select * from usuarios where 
        email='$email' and token='$token' and codigo=$codigo")or die($conexion->error);
    $correcto=false;
    if(mysqli_num_rows($res) > 0){
        $fila = mysqli_fetch_row($res);
        $fecha =$fila[5];
        $fecha_actual=date("Y-m-d h:m:s");
        $seconds = strtotime($fecha_actual) - strtotime($fecha);
        $minutos=$seconds / 60;
        /*if($minutos > 10){
            echo "Token vencido";
        }else{
            echo "Todo correcto";
        }*/
        $correcto=true;
    }else{
        $correcto=false;
    }



?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silky</title>
    <link rel="icon" type="image/jpg" href="../../images/Silky.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center" style="margin: top 15%">
        <?php if($correcto){ ?>
            <form class="col-3"action="http://localhost/cursophp/PROYECTO/GINA/ProyectoFinal/B%20V2/B%20V2/cambiarpassword.php" method="POST">
                <h2>Reestablecer Password</h2>
                <div class="mb-3">
                    <label for="c" class="form-label">Nuevo password</label>
                    <input type="password" class="form-control" id="c" name="p1">

                </div>
                <div class="mb-3">
                    <label for="c" class="form-label">Confirmar password</label>
                    <input type="password" class="form-control" id="c" name="p2">
                    <input type="hidden" class="form-control" id="c" name="email" value="<?php echo $email?>">
 
                </div>

                <button type="submit" class="btn btn-primary">Cambiar</button>
            </form>
            <?php }else{ ?>
            <div class="alert alert-danger">Codigo incorrecto o vencido</div>
            <?php } ?>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>