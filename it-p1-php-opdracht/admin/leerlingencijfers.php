<?php
  session_start();

?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<h2>Vull in leerling nummer:</h2> <br><br>
	<form action="../viewcijfers.php" method="GET">
		<input type="text" name="leerlingnummer" placeholder="leerlingnummer">
		<br>
		<button type="submit" name="submit">Voltooi</button>
		 </form>

</body>
</html>