<?php 

	session_start();

	if ( isset($_POST['token']) ) {
		$token = strtolower($_POST['token']);
		if (isset($_SESSION['captcha_token']) && $_SESSION['captcha_token'] == $token) {
			header("Location: B V2/B V2/login.php");

		} else {
			echo "CAPTCHA incorrecto";
		}
		
	}
?>