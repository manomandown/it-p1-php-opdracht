<?php include('functies.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Account aanmaken Leerlingvolgsysteem</title>
	<link rel="stylesheet" href="opmaak.css">
</head>
<body>
<div class="header">
	<h2>Aanmaken</h2>
</div>
<form method="post" action="aanmaak.php">
	<div class="input-group">
		<label>Gebruikersnaam</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Wachtwoord</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Bevestig wachtwoord</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">maak aan!</button>
	</div>
	<p>
		All een account? <a href="login.php">login</a>
	</p>
</form>
<form method="post" action="aanmaak.php">
	<?php echo display_error(); ?>
</form>
</body>
</html>