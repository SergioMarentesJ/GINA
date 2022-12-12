<?php
  require '../ProyectoFinal/B V2/B V2/config.php';
  if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id = $id");
    $row = mysqli_fetch_assoc($resultado);
    $t=1;
  }else{
    $t=0;
  }
?>

<?php 

$con = mysqli_connect("localhost", "root","","tienda") or die ("Error!"); 

?>

<?php
            if(isset($_GET['borrar'])){
              $borrar_id = $_GET['borrar'];
              $borrar = "DELETE FROM productos WHERE idp = '$borrar_id'";
              $ejecutar = mysqli_query($con, $borrar);

              if ($ejecutar){
                echo "<script>alert('El elemento ha sido borrado!')</script>";
                echo "<script>windoows.open('Tienda.php','_self')</script>";
              }
            }
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Silky</title>
  <link rel="icon" type="image/jpg" href="./images/Silky.jpeg">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/productos.css">
    
  
  
  <style>
    .container{
            background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(https://escuelaemily.imgix.net/https%3A%2F%2Fi.pinimg.com%2Foriginals%2Fd5%2F83%2F54%2Fd5835434e5895b20056c9107c530030e.jpg?s=af3a2234086392e0f89378c4b92a3f82);
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
        }
    </style>
</head>
<body>
    
    <header>
		<a href="index.php" class="logo"><img src="images/LOGO1.png" alt="" width="60px" height="80px"><span>Silky</span></a>

		<ul class="navbar">
			<li><a href="index.php" class="active">Home</a></li>
			<li><a href="Tienda.php">Tienda</a></li>
			<li><a href="acerca_de.php">Acerca De</a></li>
			<li><a href="Contactanos.php">Contactanos</a></li>
			<li><a href="Ayuda.php">Ayuda</a></li>
		</ul>

		<div class="main">
      <?php
        if ($t==1){
      ?>
          <li style="color:white;">Bienvenido <?php echo $row["usuario"]; ?>.</li>
          <li><a href="../ProyectoFinal/B V2/B V2/logout.php">Logout</a></li>
      <?php
        }else{
      ?>
          <a href="../ProyectoFinal/B V2/B V2/capt.php" class="user"><i class="ri-user-fill"></i>Sign In</a>
			    <a href="../ProyectoFinal/B V2/B V2/registration.php">Register</a>
      <?php
        }
      ?>
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>
	</header>
      <br><br><br><br>
    
    <div id="productos_tabla">
      <section class="container text-light mt-5 rounded text-center">
        <div class="row justify-content-center">
            <div class="col-md-4 my-4">
                <h2>CATEGORIAS</h2>
            </div>
        </div>
        <div class="row pb-5">
          <div class="col-lg-6 text-center pl-5">
              <a href="Caballero.php" class="mb-1 mt-5 mt-lg-0">
                <button type="button" class="btn btn-primary btn-lg btn-block">CABALLERO</button>
              </a>
            </div>
            <div class="col-lg-6 text-center pl-5">
              <a href="Dama.php" class="mb-1 mt-5 mt-lg-0">
              <button type="button" class="btn btn-primary btn-lg btn-block">DAMA</button>
              </a>
            </div>
        </div>
    </section>

   
 <br>
 <section>
        
        <div class="container">
              <br><br><br>
            <!--BLOCK ROW START-->
            <div heigth="100%">
                <div>
                
                	<!--PRICE CONTENT START-->
                    <div class="contenido clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                                <div class="head_bg"></div>
                                <div class="head">
                                 <span>
                                    
                                    <div class="row justify-content-center">
            <div>
                <h3>TODOS LOS PRODUCTOS</h3>
            </div>
        </div>
       
                                    
                                    </span>
                                </div>
                                <!--//HEAD END-->  
                            </div>
                            <!--//HEAD CONTENT END-->
                        </div>                       
                        <div class="generic_feature_list">
                        	<ul>
                            	<li> <div>
           <div class="col-md-4 my-4">
            <table id="productos_tabla" width="1000" style="background-color: rgba(0, 0, 0, 0);" style="color:black;">
              <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th width="100%"  height="100%">Imagen</th>
              </tr>
            <?php
            $consulta = "SELECT * FROM productos";
            $ejecutar = mysqli_query($con, $consulta);
            $i = 0;
            while ( $fila = mysqli_fetch_array($ejecutar)) {
              $id = $fila['idp'];
              $no = $fila['nom'];
              $ca = $fila['cat'];
              $de = $fila['des'];
              $ex = $fila['exi'];
              $pr = $fila['pre'];
              $im = $fila['image'];

              $i++;

            ?>
            <tr style="text-align:center;">
            
            <td>
              <a href="MostrarP.php?idM=<?php echo $id; ?>" class="text-dark"><?php echo $no; ?></a>
            </td>
            <td><?php echo '$'. $pr; ?></td>
            <td><img style="width: 400px; height: 500px;" src=images/<?php echo $fila['image']; ?>></td>

            <?php
              if ($t==1 && $row["usuario"] == 'admin'){
            ?>
                <div>
                  <td><a href="editar.php?idmodifi=<?php echo $id; ?>">Editar</a></td>
                  <td><a href="Tienda.php?borrar=<?php echo $id; ?>">Borrar</a></td>
                </div>
            <?php
              }
            ?>
            </tr>
            <?php } ?>
            </table>
           </div>
            
            <?php
              if ($t==1 && $row["usuario"] == 'admin'){
            ?>
                <div>
                  <a href="../ProyectoFinal/ABC.php">Añadir productos</a>
                </div>
            <?php
              }
            ?>
            <br>
        </div></li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                    </div>
                    <!--//PRICE CONTENT END-->   
                </div>
            </div>	  <br><br><br>
            <!--//BLOCK ROW END-->
        </div>
    </section>
  
    </div>   
<!-- partial -->
  <script  src="js/script2.js"></script>
      
      	<!--js link--->
	<script type="text/javascript" src="js/script.js"></script>
    
  <fotter>
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>EMPRESA</h1>
    <ul>
      <li><a href="acerca_de.php">Acerca De</a></li>
      <li><a href="Contactanos.php"></a>Contactanos</li>
      <li><a href="Ayuda.php"></a>Ayuda</li>
      <li><a href=""></a>info</li>
    </ul>
  </div>
  <div class="col">
    <h1>PRODUCTOS</h1>
    <ul>
      <li><a href="#">Ropa</a></li>
      <li><a href="#"></a>Calzado</li>
      <li><a href="#"></a>Categorias</li>
      <li><a href="#"></a>info</li>
    </ul>
  </div>
  <div class="col">
    <h1>Accounts</h1>
    <ul>
      <li><a href="#">Ropa</a></li>
      <li><a href="#"></a>Calzado</li>
      <li><a href="#"></a>Categorias</li>
      <li><a href="#"></a>info</li>
    </ul>
  </div>
  <div class="col social">
    <h1>Social</h1>
    
     <div class="flex footer-social">
      <ul>
        <li><a href="#" rel="noopener" target="_blank"><svg aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 32 32" width="24" height="24"><path fill="#ffffff" d="M18.222 11.556V8.91c0-1.194.264-1.799 2.118-1.799h2.326V2.667h-3.882c-4.757 0-6.326 2.181-6.326 5.924v2.965H9.333V16h3.125v13.333h5.764V16h3.917l.528-4.444h-4.444z"></path></svg></a></li>
        <li><a href="#" rel="noopener" target="_blank"><svg aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 32 32" width="24" height="24"><path fill="#ffffff" d="M16 2C8.269 2 2 8.269 2 16c0 5.731 3.45 10.656 8.381 12.825-.037-.975-.006-2.15.244-3.212l1.8-7.631s-.45-.894-.45-2.213c0-2.075 1.2-3.625 2.7-3.625 1.275 0 1.887.956 1.887 2.1 0 1.281-.819 3.194-1.238 4.969-.35 1.488.744 2.694 2.212 2.694 2.65 0 4.438-3.406 4.438-7.444 0-3.069-2.069-5.362-5.825-5.362-4.244 0-6.894 3.169-6.894 6.706 0 1.219.363 2.081.925 2.744.256.306.294.431.2.781-.069.256-.219.875-.287 1.125-.094.356-.381.481-.7.35-1.956-.8-2.869-2.938-2.869-5.35 0-3.975 3.356-8.744 10.006-8.744 5.344 0 8.863 3.869 8.863 8.019 0 5.494-3.056 9.594-7.556 9.594-1.512 0-2.931-.819-3.419-1.744 0 0-.813 3.225-.988 3.85-.294 1.081-.875 2.156-1.406 3 1.256.369 2.588.575 3.969.575 7.731 0 14-6.269 14-14 .006-7.738-6.262-14.006-13.994-14.006z"></path></svg></a></li>
        <li><a href="#" rel="noopener" target="_blank"><svg aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 512 512" width="24" height="24"><path fill="#ffffff" d="M256 49.5c67.3 0 75.2.3 101.8 1.5 24.6 1.1 37.9 5.2 46.8 8.7 11.8 4.6 20.2 10 29 18.8s14.3 17.2 18.8 29c3.4 8.9 7.6 22.2 8.7 46.8 1.2 26.6 1.5 34.5 1.5 101.8s-.3 75.2-1.5 101.8c-1.1 24.6-5.2 37.9-8.7 46.8-4.6 11.8-10 20.2-18.8 29s-17.2 14.3-29 18.8c-8.9 3.4-22.2 7.6-46.8 8.7-26.6 1.2-34.5 1.5-101.8 1.5s-75.2-.3-101.8-1.5c-24.6-1.1-37.9-5.2-46.8-8.7-11.8-4.6-20.2-10-29-18.8s-14.3-17.2-18.8-29c-3.4-8.9-7.6-22.2-8.7-46.8-1.2-26.6-1.5-34.5-1.5-101.8s.3-75.2 1.5-101.8c1.1-24.6 5.2-37.9 8.7-46.8 4.6-11.8 10-20.2 18.8-29s17.2-14.3 29-18.8c8.9-3.4 22.2-7.6 46.8-8.7 26.6-1.3 34.5-1.5 101.8-1.5m0-45.4c-68.4 0-77 .3-103.9 1.5C125.3 6.8 107 11.1 91 17.3c-16.6 6.4-30.6 15.1-44.6 29.1-14 14-22.6 28.1-29.1 44.6-6.2 16-10.5 34.3-11.7 61.2C4.4 179 4.1 187.6 4.1 256s.3 77 1.5 103.9c1.2 26.8 5.5 45.1 11.7 61.2 6.4 16.6 15.1 30.6 29.1 44.6 14 14 28.1 22.6 44.6 29.1 16 6.2 34.3 10.5 61.2 11.7 26.9 1.2 35.4 1.5 103.9 1.5s77-.3 103.9-1.5c26.8-1.2 45.1-5.5 61.2-11.7 16.6-6.4 30.6-15.1 44.6-29.1 14-14 22.6-28.1 29.1-44.6 6.2-16 10.5-34.3 11.7-61.2 1.2-26.9 1.5-35.4 1.5-103.9s-.3-77-1.5-103.9c-1.2-26.8-5.5-45.1-11.7-61.2-6.4-16.6-15.1-30.6-29.1-44.6-14-14-28.1-22.6-44.6-29.1-16-6.2-34.3-10.5-61.2-11.7-27-1.1-35.6-1.4-104-1.4z"></path><path fill="#ffffff"  d="M256 126.6c-71.4 0-129.4 57.9-129.4 129.4s58 129.4 129.4 129.4 129.4-58 129.4-129.4-58-129.4-129.4-129.4zm0 213.4c-46.4 0-84-37.6-84-84s37.6-84 84-84 84 37.6 84 84-37.6 84-84 84z"></path><circle fill="#ffffff" cx="390.5" cy="121.5" r="30.2"></circle></svg></a></li>
      </ul>
        </div>
      </div>
    <div class="clearfix"><a class="bottom_btn" href="#">&copy; SILKY</a></div><br>
  </div>
</div>
         </fotter>
         
      	<!--js link--->
	<script type="text/javascript" src="js/script.js"></script>
   <script type="text/javascript" src="js/script2.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js'></script><script  src="./script.js"></script>
</body>
</html>