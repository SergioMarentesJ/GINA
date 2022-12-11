<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>	
</body>
</html>
<script>
<?php 
function validar(){
	session_start();

	if ( isset($_POST['token']) ) {
		$token = strtolower($_POST['token']);
		if (isset($_SESSION['captcha_token']) && $_SESSION['captcha_token'] == $token) {
			header("Location: B V2/B V2/login.php");

		} else {
			swal("CAPTCHA incorrecot", "Intentalo de nuevo", "error");
		}
		
	}
}
?>
</script>
