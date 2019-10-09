
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="hello">
	<meta name=viewport content="width=device-width, intial-scale=1">
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<header>
		<nav class="nav-header-main">
			<a class="header-logo" href="index.php">
				<img src= "magister.jpg" alt="logo">
			</a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">portofolio</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li> 
			</ul>
		</nav>
		<div class="header-login">
			<form action="includes/login.inc.php" method="post">
				<input type="text" name="mailuid" placeholder="Username/E-mail...">
				<input type="Password" name="pwd" placeholder="Password...">
					<button type="submit" name="login-submit">Login</button>
			</form>
			<a href="signup.php">Signup</a>
			<form action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
			</form>
			</div>
		

	</header>

</body>
</html>