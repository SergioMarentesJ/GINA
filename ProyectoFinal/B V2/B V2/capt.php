<!DOCTYPE html>
<html>
<head>
	<title>PHP CAPTCHA Test Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta charset="utf-8">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

	<div class="p-5">

		<div class="card">
			<div class="card-header">VERIFICA QUE ERES HUMANO</div>
			<div class="card-body">

				<form id="contact-form" method="post" action="../../contact.php">

					<div class="form-group row">
                    <label class="col-sm-2 col-form-label">Escribe el siguiente código:</label>
						<div class="col-sm-10">
							<div class="form-row align-items-center">
                                <div class="col mb-3">
									<img src="../../captcha/image.php?12325" alt="CAPTCHA" id="image-captcha">
									<a href="#" id="refresh-captcha" class="align-middle" title="refresh"><i class="material-icons align-middle">refresh</i></a>
								</div>
							</div>
						</div>
                        <div class="col mb-3">
							<input type="text" class="form-control" name="token" id="token" placeholder="Captcha" style="min-width: 150px;">
						</div>
					</div>

					<button type="submit" class="btn btn-primary" name="submit" id="submit">Verificar</button>
				</form>

			</div>
		</div>

	</div>

	<script>
		var refreshButton = document.getElementById("refresh-captcha");
		var captchaImage = document.getElementById("image-captcha");

		refreshButton.onclick = function(event) {
			event.preventDefault();
			captchaImage.src = '../../captcha/image.php?' + Date.now();
		};
	</script>

</body>
</html>