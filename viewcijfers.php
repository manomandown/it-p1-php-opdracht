<?php

  require "admin/includesUsers/dbhUs.php";
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
	$sql = "SELECT * FROM leerlingencijfers WHERE leerlingnummer='$leerlingnummer';";
	$result = mysqli_query($rel, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		 
		 echo '<table>';
		  
	while ($row = mysqli_fetch_array ($result)) {
		echo '<h1>cijferlijst</h1><h2>' . $row['Naam'] . '</h2><h2>' . $row['Achternaam'] . '</h2><br>';
		echo '<tr><td>Frans:</td><td>' . $row['Frans'] . '</td></tr>' . '<tr><td>Engels:</td><td>'. $row['Engels'] . '</td></tr>' . '<tr><td>Wiskunde:</td><td>'. $row['Wiskunde'] . '</td></tr>' . '<tr><td>Nederlands:</td><td>'. $row['Nederlands'] . '</td></tr>' . '<tr><td>Natuurkunde</td><td>' . $row['Natuurkunde'] . '</td></tr>' . '<tr><td>Scheikunde</td><td>' . $row['Scheikunde'] . '</td></tr>' . '<tr><td>it</td><td>'. $row['it'] . '</td></tr>' . '<tr><td>ckv:</td><td>' . $row['ckv'] . '</td></tr>' . '<tr><td>LO:</td><td>'. $row['LO'] . '</td></tr>';
		
	}
	echo '</table>';
}
} else die ("Onbekend leerlingnummer");
 ?>
	
	

</body>
</html>