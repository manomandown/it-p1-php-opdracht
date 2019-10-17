<?php
  session_start();

  require "includesUsers/dbhUs.php";
?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<h2>Vull in leerling nummer:</h2> <br><br>
	<form action="cool.php" method="GET"></form>
		<table>
			<tr><td>Leerling Nummer</td><td><input type="text" id="leerlingnummer" name="leerlingnummer"></td></tr>
			<tr><td><input type="submit" id="submit" name="submit" value="Ga door"></td></tr>
		</table>

</body>
</html>