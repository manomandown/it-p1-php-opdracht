<?php include('functies.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>hallo</title>
	<link rel="stylesheet" type="text/css" href="opmaak.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Gebruikersnaam</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Wachtwoord</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Nog geen account? <a href="register.php">Maak aan</a>
		</p>
	</form>
</body>
</html>