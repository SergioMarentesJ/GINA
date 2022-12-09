<!DOCTYPE html> 
<meta charset="UTF-8">

<?php 

$con = mysqli_connect("localhost", "root","","tienda") or die ("Error!"); 

?>

<html>
<head>
	<title>Tienda</title>
	</HEAD><H1><P ALIGN="CENTER"><FONT SIZE="7" COLOR="BLACK" FACE="Tempus Sans ITC"> Altas, Bajas y Consultas</H1><B><B></FONT> <B><B>
	<meta charset="utf-8">
</head>
<body background="fondo.jpg">
 <form method="POST" action="ABC.php">
	 <label>ID:<br></label>
	 <input type="number" name="idp" placeholder = "Ingrese el ID"><br />
	 <label>Nombre:<br> </label>
	 <input type="text" name="nom" placeholder = "Ingrese el nombre del producto"><br />
	 <label>Categoria:<br></label>
	 <input type="text" name="cat" placeholder = "Ingrese la categoria"><br /><br>
	 <label>Descripcion:<br></label>
	 <input type="text" name="des" placeholder = "Breve descripcion"><br /><br>
	 <label>Existencia:<br></label>
	 <input type="number" name="exi" placeholder = "Existencia del producto"><br /><br>
	 <label>Precio:<br></label>
	 <input type="number" name="pre" placeholder = "$MXN"><br /><br>
	 <form action="upload.php" method="post" enctype="multipart/form-data">Subir imagen
	 <input type="file" name="image">
	 <input type="submit" name="insert" value = "INSERTAR DATOS">

 </form>

<?php
	if(isset($_POST["insert"])){
		$idp = $_POST["idp"];
		$nom = $_POST["nom"];
		$cat = $_POST["cat"];
        $des = $_POST["des"];
        $exi = $_POST["exi"];
        $pre = $_POST["pre"];
        $image = $_POST["image"];

		$insertar = "INSERT INTO productos (idp,nom,cat,des,exi,pre,image) VALUES ('$idp', '$nom', '$cat', '$des', '$exi', '$pre', '$image')";
		$ejecutar = mysqli_query($con, $insertar);

		if ($ejecutar){
			echo "<h3>Insertado Correctamente</h3>";
		}
	}
?>
<br/>

<a href="mostrar.php">Mostrar tabla</a>

<br><br><br><br><br>
<MARQUEE DIRECTION="RIGHT" FACE="Arial Unicode MS" BEHAVIOR="ALTERNATE" BGCOLOR ="BLACK">
<FONT COLOR="WHITE">
<center> Universidad Autónoma de Aguascalientes<br>
Equipo <br>
Maestra: Georgina Salazar Partida.<br>
Equipo: 
Ingenieria en Sistemas Computacionales.</FONT></MARQUEE>
</body>
</html>
