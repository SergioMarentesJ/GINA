<?php
   session_start();
     
   
    $conexion  = mysqli_connect("localhost", "root","","tienda") or die ("Error!"); 

        
    if(isset($_POST['mod'])) {
        $cod=$_POST['idmo'];

        
        $uno = $_POST['idp2'];
        $dos = $_POST['nom2'];
        $tres = $_POST['cat2'];
        $cuatro = $_POST['des2'];
        $cinco = $_POST['exi2'];
        $seis = $_POST['pre2'];
        $siete = $_POST['image2'];
        

        try { 
        $ne = "UPDATE productos SET idp='$uno', 
        nom='$dos', 
        cat='$tres', 
        des='$cuatro', 
        exi='$cinco', 
        pre='$seis', 
        image='$siete' 
        WHERE idp='$cod'";
        $fin = $conexion -> query($ne);
    } catch (mysqli_sql_exception $e) { 
        var_dump($e);
        exit; 
     } 
     
    }
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
   
</head>
<body>
        <?php 
        if(empty ($_GET['idmodifi'])){
            header('Location: mostrar.php');
        }else{
            $idmod=$_GET['idmodifi'];
        }
        ?>
        <div class="derecha">
        
            <form class="estiloformulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
            <ul class="wrapper">
                <li class="form-row">
                    <input type="hidden"  name="idmo" value="<?php echo $idmod; ?>>">
                <label>ID  a modificar: </label> <?php echo $idmod; ?>
                </li>
                <li class="form-row">
                <label>ID: </label>
                <input type="number" name="idp2" id="idp2">
                </li>
                <li class="form-row">
                <label>Nombre: </label>
                <input type="text" name="nom2" id="nom2">
                </li>
                <li class="form-row">
                <label>Categoria: </label>
                <input type="text" name="cat2" id="cat2" >
                </li>
                <li class="form-row">
                <label>Descripcion: </label>
                <input type="text" name="des2" id="des2" >
                </li>
                <li class="form-row">
                <label>Existencia: </label>
                <input type="number" name="exi2" id="exi2">
                </li>
                <li class="form-row">
                <label>Precio: </label>
                <input type="number" name="pre2" id="pre2">
                </li>
                <li class="form-row">
                <label>Image: </label>
                <input type="file" name="image2" id="image2">
                </li>
                <li class="form-row">
                <button type="submit" name="mod">Modificar</button>
                </li>
            </ul>
            </form>       
        </div>
</body>
</html>