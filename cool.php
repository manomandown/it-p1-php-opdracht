<?php

  require "includesUsers/dbhUs.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

<?php 
if (isset($_GET['leerlingnummer'])){
	$leerlingnummer = $_GET['leerlingnummer'];
	$leerlingquery = mysqli_query("SELECT * FROM leerlingencijfers WHERE leerlingnummer='$leerlingnummer';") or die ("The query could not be compleated. Please try again");
	if (mysqli_num_rows($leerlingquery) !=1) {
		die ("Onbekende leerlingnummer");
	}
	while ($row = mysqli_fetch_array ($leerlingquery, MYSQL_ASSOC)) {
		$Naam = $row['Naam'];
		$Achternaam = $row['Achternaam'];
		$Frans = $row['Frans'];
		$Engels = $row['Engels'];
		$Wiskunde = $row['Wiskunde'];
		$Nederlands = $row['Nederlands'];
		$Natuurkunde = $row['Natuurkunde'];
		$Scheikunde = $row['Scheikunde'];
		$it = $row['it'];
		$ckv = $row['ckv'];
		$LO = $row['LO'];
	}
 ?>
	<h2><?php echo $Naam; ?> <?php echo $Achternaam; ?>: cijferlijst</h2><br>
	<table>
		<tr><td>Frans:</td><td><?php echo $Frans; ?></td></tr>
		<tr><td>Engels:</td><td><?php echo $Engels; ?></td></tr>
		<tr><td>Wiskunde:</td><td><?php echo $Wiskunde; ?></td></tr>
		<tr><td>Nederlands:</td><td><?php echo $Nederlands; ?></td></tr>
		<tr><td>Natuurkunde</td><td><?php echo $Natuurkunde; ?></td></tr>
		<tr><td>Scheikunde</td><td><?php echo $Scheikunde; ?></td></tr>
		<tr><td>it</td><td><?php echo $it; ?></td></tr>
		<tr><td>ckv:</td><td><?php echo $ckv; ?></td></tr>
		<tr><td>LO:</td><td><?php echo $LO; ?></td></tr>
	</table>

<?php
} else die ("Onbekend leerlingnummer");
	?>
</body>
</html>