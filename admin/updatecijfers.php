<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<h2>Vull in leerling cijfers:</h2> <br><br>
	<form action="chcijfers.php" method="POST">
		<input type="text" name="Naam" placeholder="Naam">
		<br>
		<input type="text" name="Achternaam" placeholder="Achternaam">
		<br>
		<p></p><input type="text" name="Frans" placeholder="Frans">
		<br>
		<input type="text" name="Engels" placeholder="Engels">
		<br>
		<input type="text" name="Wiskunde" placeholder="Wiskunde">
		<br>
		<input type="text" name="Nederlands" placeholder="Nederlands">
		<br>
		<input type="text" name="Natuurkunde" placeholder="Natuurkunde">
		<br>
		<input type="text" name="Scheikunde" placeholder="Scheikunde">
		<br>
		<input type="text" name="it" placeholder="it">
		<br>
		<input type="text" name="ckv" placeholder="çkv">
		<br>
		<input type="text" name="LO" placeholder="LO">
		<br>
		
		<button type="submit" name="submit">Voltooi</button>
		 
		 </form>

		 <button class="view" onclick="window.location.href = 'leerlingencijfers.php';">Bekijk cijfers

</body>
</html>