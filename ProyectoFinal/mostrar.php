<?php 

$con = mysqli_connect("localhost", "root","","tienda") or die ("Error!"); 

?>

<center><table width="500" border="2" style="background-color: #F9F9F9; ">
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Categoria</th>
		<th>Descripcion</th>
		<th>Existencia</th>
		<th>Precio</th>
		<th>Imagen</th>
		<th>Editar</th>
		<th>Borrar</th>
	</tr></center>
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
<tr align="center">
<td><?php echo $id; ?></td>
<td><?php echo $no; ?></td>
<td><?php echo $ca; ?></td>
<td><?php echo $de; ?></td>
<td><?php echo $ex; ?></td>
<td><?php echo $pr; ?></td>
<td><?php echo $im; ?></td>
<td><a href="editar.php?idmodifi=<?php echo $id; ?>">Editar</a></td>
<td><a href="mostrar.php?borrar=<?php echo $id; ?>">Borrar</a></td>
</tr>
<?php } ?>
</table>

<?php
if(isset($_GET['borrar'])){
	$borrar_id = $_GET['borrar'];
	$borrar = "DELETE FROM productos WHERE idp = '$borrar_id'";
	$ejecutar = mysqli_query($con, $borrar);

	if ($ejecutar){
		echo "<script>alert('El usuario ha sido borrado!')</script>";
		echo "<script>windoows.open('ABC.php','_self')</script>";
        header('Location: mostrar.php');
	}
}
?>

<a href="ABC.php">Añadir elemento</a>